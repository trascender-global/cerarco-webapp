<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\BusquedaTrait;
use App\Http\Traits\MapaPuntosTrait;
use App\Imports\FichasImport;
use App\Models\Foto;
use App\Models\FotosVariante;
use App\Models\MapaPunto;
use App\Models\Modelo;
use App\Models\PiezaClave;
use App\Models\PiezaClaveCampos;
use App\Models\PiezaClaveDibujos;
use App\Models\PiezaClaveFotos;
use App\Services\Fichas;
use App\Services\Modelos;
use App\Services\PiezaClaveService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Exceptions\NoTypeDetectedException;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class FichasController extends Controller
{

    use BusquedaTrait, MapaPuntosTrait;

    function __construct()
    {
        if (Session::get('lang')) {
            App::setLocale(Session::get('lang'));
        }
    }

    function subirFicha(Request $request)
    {
        return view('admin.fichas.subir_ficha');
    }

    function subirArchivoFicha(Request $request)
    {
        if ($request->hasFile('ficha')) {
            foreach ($request->file('ficha') as $ficha) {
                try {
                    Excel::import(new FichasImport, $ficha);
                    $modelo = Modelo::ultimo_modelo();
                    $dir    = __DIR__.'/../../../../public/assets/fichas/'.$modelo->id.'/';
                    try {
                        if (!is_dir($dir)) {
                            mkdir($dir);
                        }
                        $ruta = $dir.$ficha->getClientOriginalName();
                        copy($ficha->getRealPath(), $ruta);
                        $modelo->archivo = $ficha->getClientOriginalName();
                        $modelo->save();
                    } catch (Throwable $e) {
                    }
                } catch (NoTypeDetectedException $e) {
                    return redirect()->route('admin.ficha.subir_ficha')
                        ->withMensaje('Archivo no compatible')
                        ->withType('danger');
                } catch (Throwable $e) {
                    return redirect()->route('admin.ficha.subir_ficha')
                        ->withMensaje($e->getMessage())
                        ->withType('danger');
                }

            }
            return redirect()->route('admin.ficha.editar_ficha',
                ['modelo' => Modelo::ultimo_modelo()->codigo]);
        }
        return redirect()->back();
    }


    function listadoFichas(Request $request)
    {
        $modelos = Modelo::paginate(20);
        return view('admin.fichas.listado_fichas', compact('modelos'));
    }

    function busquedaListadoFichas()
    {
        session()->flash('todos', DB::table('pieza_clave_datos')
            ->select('pieza_clave_id')
            ->distinct()
            ->get());
        $collection = self::obtenerBusqueda('area_geografica', config('busqueda.area_geografica'));
        $collection = $collection->intersect(self::obtenerBusqueda('sub_region_geografica', config('busqueda.sub_region_geografica')));
        $collection = $collection->intersect(self::obtenerBusqueda('departamentos', config('busqueda.departamento')));
        $collection = $collection->intersect(self::obtenerBusqueda('confiabilidad_modelo', config('busqueda.confiabilidad_modelo')));
        session()->forget('todos');

        $modelos = Modelo::whereIn('id',self::obtenerModelosBusquedaId($collection))->paginate(20);
        return view('admin.fichas.listado_fichas', compact('modelos'));
    }

    /**
     * @param  Modelo  $modelo
     * @param  Request  $request
     * @return Application|Factory|View
     */
    function editarFicha(Modelo $modelo, Request $request)
    {
        return view('admin.fichas.editar_ficha', compact('modelo'));
    }

    public function actualizarDatoVariante(Request $request)
    {
        $modelo        = Modelo::find($request->get('modelo'));
        $metadata      = $modelo->getAttribute('metadata_'.$request->get('variante'));
        $metadataCampo = "metadata_".$request->get("variante");
        try {
            if (isset($metadata[$request->get('seccion')][$request->get('campo')])) {
                $campo = &$metadata[$request->get('seccion')][$request->get('campo')];
            } elseif (isset($metadata[$request->get('tab')][$request->get('seccion')][$request->get('campo')])) {
                $campo = &$metadata[$request->get('tab')][$request->get('seccion')][$request->get('campo')];
            } else {
                return response()->json([])->setStatusCode(500);
            }
            $campo['valor'] = $request->get('valor');

            $modelo->$metadataCampo = $metadata;
            $modelo->save();
            return response()->json();
        } catch (Throwable $e) {
            return response()->json([])->setStatusCode(500);
        }
    }

    /**
     * @param  Modelo  $modelo
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function salvarFicha(Modelo $modelo, Request $request)
    {
        try {
            $modelo->save();
            session()->flash('mensaje', 'Ficha Actualizada Exitosamente');
            session()->flash('type', 'success');
        } catch (Throwable $e) {
            session()->flash('mensaje', 'Hubo un error al actualizar la Ficha');
            session()->flash('type', 'danger');
        }
        return redirect()->route('admin.ficha.editar_ficha', compact('modelo'));

    }

    /**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  Request  $request
     */
    public function subirFotos(Modelo $modelo, string $variante, Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $modelo->fotos()->create(['name' => $path, 'variante' => $variante,'posicion'=>$request->posicion]);
        return view('admin.fichas.variantes.pieza_clave.render.foreach_fotos',["modelo"=>$modelo,'variante' => $variante])->render();
    }
/**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  Request  $request
     */
    public function moverFotos(Modelo $modelo, string $variante, Request $request)
    {
        $p=$modelo->fotos()->find($request->id);
        $p->posicion=$request->posicion;
        $p->save();
        return view('admin.fichas.variantes.pieza_clave.render.foreach_fotos',["modelo"=>$modelo,'variante' => $variante])->render();
    }
    /**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  string  $variante_codigo
     * @param  Request  $request
     */
    public function subir_fotos_variante(Modelo $modelo, string $variante, string $variante_codigo = '', Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $modelo->fotosVariante()->create([
            'variante' => $variante,
            'codigo'   => $variante_codigo,
            'foto'     => $path,
            'posicion' => $request->posicion
        ]);
        return view('admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes',
            [
            "modelo"=>$modelo,
            "variante"=>$variante,
            "varianteCodigo"=>$variante_codigo,
        ])->render();
    }
    /**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  string  $variante_codigo
     * @param  Request  $request
     */
    public function mover_fotos_variante(Modelo $modelo, string $variante, string $variante_codigo = '', Request $request)
    {
        $p=$modelo->fotosVariante()->find($request->id);
        $p->posicion=$request->posicion;
        $p->save();
        
        return view('admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes',
            [
            "modelo"=>$modelo,
            "variante"=>$variante,
            "varianteCodigo"=>$variante_codigo,
        ])->render();
    }

    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function subir_fotos_pieza_clave(PiezaClave $piezaClave, Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $piezaClave->fotos()->create(['foto' => $path,'posicion'=>$request->posicion]);
         return view('admin.fichas.variantes.pieza_clave.render.foreach_pieza_clave_fotos',["pieza_clave"=>$piezaClave])->render();
    }
    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function mover_fotos_pieza_clave(PiezaClave $piezaClave, Request $request)
    {
        $p=$piezaClave->fotos()->find($request->id);
        $p->posicion=$request->posicion;
        $p->save();
        return view('admin.fichas.variantes.pieza_clave.render.foreach_pieza_clave_fotos',["pieza_clave"=>$piezaClave])->render();
    }

    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function subirDibujos(PiezaClave $piezaClave, Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $piezaClave->dibujos()->create(['foto' => $path,'posicion'=>$request->posicion]);
        return view('admin.fichas.variantes.pieza_clave.render.foreach_dibujos',["pieza_clave"=>$piezaClave])->render();
    }

    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function moverDibujos(PiezaClave $piezaClave, Request $request)
    {
        
        $p=$piezaClave->dibujos()->find($request->id);
        $p->posicion=$request->posicion;
        $p->save();
        return view('admin.fichas.variantes.pieza_clave.render.foreach_dibujos',["pieza_clave"=>$piezaClave])->render();
    }

    /**
     * @param $foto
     * @param  Request  $request
     * @return JsonResponse|int
     */
    public function borrarFoto($foto, Request $request)
    {
        return Modelos::borrarModelo(Foto::find($foto));
    }

    /**
     * @param $dibujo
     * @param  Request  $request
     * @return JsonResponse|int
     */
    public function borrarDibujoClave($dibujo, Request $request)
    {
        return Modelos::borrarModelo(PiezaClaveDibujos::find($dibujo));
    }

    /**
     * @param $foto
     * @param  Request  $request
     * @return JsonResponse|int
     */
    public function borrarFotoVariante($foto, Request $request)
    {
        return Modelos::borrarModelo(FotosVariante::find($foto));
    }

    /**
     * @param $foto
     * @param  Request  $request
     * @return JsonResponse|int
     */
    public function borrarFotoClave($foto, Request $request)
    {
        return Modelos::borrarModelo(PiezaClaveFotos::find($foto));
    }

    /**
     * @param  PiezaClave  $pieza_clave
     * @param  string  $puntos
     * @param  Request  $request
     */
    public function agregarPuntos(PiezaClave $pieza_clave, string $puntos, Request $request)
    {

        foreach (self::getPuntosNoExisten($pieza_clave, $puntos) as $punto) {
            $punto->delete();
        }

        foreach (json_decode($puntos) as $punto) {
            if (MapaPunto::lat($punto->lat)->lng($punto->lng)->where('pieza_clave_id', $pieza_clave->id)->doesntExist()) {
                $pieza_clave->puntos()->create(['lng' => $punto->lng, 'lat' => $punto->lat]);
            }
        }

    }

    /**
     * @param  PiezaClave  $pieza_clave
     * @param  string  $puntos
     * @param  Request  $request
     *
     * @deprecated
     */
    public function borrarPuntos(PiezaClave $pieza_clave, string $puntos, Request $request)
    {
        foreach (json_decode($puntos) as $punto) {
            // dd($punto, MapaPunto::lat($punto->lat)->lng($punto->lng)->where('pieza_clave_id', $pieza_clave->id)->toSql());
        }
    }

    function modificarCampo(Request $request)
    {
        $piezaClave      = PiezaClave::findOrFail($request->get('pieza'));
        $piezaClaveCampo = PiezaClaveCampos::where('slug', $request->get('slug'))->firstOrFail();
        PiezaClaveService::SalvarPiezaClave($request, $piezaClave, $piezaClaveCampo);

    }

    public function borrarFicha(Modelo $modelo)
    {

        try {
            DB::transaction(function () use ($modelo) {
                $modelo->piezasClave->map(function (PiezaClave $pieza_clave) {
                    $pieza_clave->dibujos()->forceDelete();
                    $pieza_clave->puntos()->forceDelete();
                    $pieza_clave->fotos()->forceDelete();
                    $pieza_clave->datos()->forceDelete();
                    $pieza_clave->forceDelete();
                });
                $modelo->fotos()->forceDelete();
                $modelo->fotosVariante()->forceDelete();
                $modelo->forceDelete();
            });
            session()->flash('mensaje', 'La Ficha se borro Exitosamente');
            session()->flash('type', 'success');
        } catch (Throwable $e) {
            session()->flash('mensaje', 'Hubo un error al borrar la Ficha: ');
            session()->flash('type', 'danger');
        }

        return redirect()->route('admin.ficha.listado');
    }

}
