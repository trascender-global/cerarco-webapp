<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\BusquedaTrait;
use App\Http\Traits\MapaPuntosTrait;
use App\Imports\FichasImport;
use App\Models\Foto;
use App\Models\FotosVariante;
use App\Models\ListaValores;
use App\Models\MapaPunto;
use App\Models\Modelo;
use App\Models\PiezaClave;
use App\Models\PiezaClaveDato;
use App\Models\PiezaClaveCampos;
use App\Models\PiezaClaveDibujos;
use App\Models\PiezaClaveFotos;
use App\Services\Fichas;
use App\Services\Modelos;
use App\Services\PiezaClaveService;
use Exception;
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
use Illuminate\Support\Facades\Auth;
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
    function crearFicha(Request $request)
    {
        return view('admin.fichas.crear_ficha');
    }
    public function Render($type, Request $request)
    {
        if ($type == 'create') {
            $head = view('admin.fichas.create.tab_header', ['index' => $request->index])->render();
            $body = view('admin.fichas.create.tab_panel', ['index' => $request->index])->render();
            return response()->json(['header' => $head, 'body' => $body]);
        } else {
            $dataConfig = config('fichas.columnas');
            $modelo = Modelo::find($request->modelo);
            $pieza_clave = PiezaClave::where('pieza_clave', $modelo->codigo . '-PC' . $request->index)->first();
            if (!$pieza_clave) {
                $pieza_clave = PiezaClave::create([
                    'pieza_clave' => $modelo->codigo . '-PC' . $request->index,
                    'modelo_id'   => $modelo->id
                ]);
            }
            foreach ($dataConfig as $data) {
                $valor = '';
                $pieza_dato = PiezaClaveDato::where('pieza_clave_id', $pieza_clave->id)->where('campo', $data['nombre'])->first();
                if ($pieza_dato) {
                    $pieza_dato->valor = $valor;
                    $pieza_dato->save();
                } else {
                    $pieza_dato = PiezaClaveDato::create([
                        'pieza_clave_id' => $pieza_clave->id,
                        'campo'          => $data['nombre'],
                        'valor'          => $valor,
                        'valor_slug'     => '',
                        'posicion'       => $data['id'],
                        'config'         => $data,
                    ]);
                }
            }
            $head = view('admin.fichas.variantes.tab_header', ['pieza_clave' => $pieza_clave, 'loop_' => ($request->index - 1)])->render();
            $body = view('admin.fichas.variantes.tab_panel', ['pieza_clave' => $pieza_clave, 'modelo' => $modelo, 'loop_' => ($request->index - 1)])->render();
            return response()->json(['header' => $head, 'body' => $body]);
        }
    }
    public function crearPiezaClave($len, Request $request)
    {
        $dataConfig = config('fichas.columnas');

        $dataModelo        = [];
        $dataForma         = [];
        $dataDecorativa    = [];
        $dataArqueometrica = [];
        for ($i = 1; $i <= $len; $i++) {
            $modelo = Modelo::where('codigo', $request->input('dg-codigo-modelo_' . $i))->first();
            if (!$modelo) {
                $modelo = Modelo::firstOrCreate([
                    'user_id' => Auth::id(),
                    'codigo'  => $request->input('dg-codigo-modelo_' . $i),
                ]);
            }
            $pieza_clave = PiezaClave::where('pieza_clave', $request->input('pieza_clave_codigo_' . $i))->first();
            if (!$pieza_clave) {
                $pieza_clave = PiezaClave::create([
                    'pieza_clave' => $request->input('pieza_clave_codigo_' . $i),
                    'modelo_id'   => $modelo->id
                ]);
            }
            $pieza_clave_campos = PiezaClaveCampos::orderBy('id')->get();
            $campos_filters = [];
            foreach ($pieza_clave_campos as $campo) {
                if ($request->has($campo->slug . '_' . $i)) {
                    $state = false;
                    if ($campo->slug == 'fr-localizacion-dentro-forma_' . $i) {
                        $campos_filters['Fr ' . $campo->campo] = $request->input($campo->slug . '_' . $i);
                        $state = true;
                    }
                    if ($campo->slug == 'dec-tratamiento-superficie_' . $i) {
                        $campos_filters['Dec ' . $campo->campo] = $request->input($campo->slug . '_' . $i);
                        $state = true;
                    }
                    if (!$state) {
                        $campos_filters[$campo->campo] = $request->input($campo->slug . '_' . $i);
                    }
                }
            }
            //dd($campos_filters);
            foreach ($dataConfig as $data) {
                if (array_key_exists($data['nombre'], $campos_filters)) {
                    $valor = '';
                    if ($data['lista'] == 0) {
                        $valor = $campos_filters[$data['nombre']] ? $campos_filters[$data['nombre']] : '';
                    } else {
                        if ($campos_filters[$data['nombre']])
                            $valor = ListaValores::where('lista_id', $data['lista'])->where('slug', $campos_filters[$data['nombre']])->first()->valor;
                    }
                    $pieza_dato = PiezaClaveDato::where('pieza_clave_id', $pieza_clave->id)->where('campo', $data['nombre'])->first();
                    if ($pieza_dato) {
                        $pieza_dato->valor = $valor;
                        $pieza_dato->save();
                    } else {
                        $pieza_dato = PiezaClaveDato::create([
                            'pieza_clave_id' => $pieza_clave->id,
                            'campo'          => $data['nombre'],
                            'valor'          => $valor,
                            'valor_slug'     => '',
                            'posicion'       => $data['id'],
                            'config'         => $data,
                        ]);
                    }
                    if ($data['modelo'] === true) {
                        $modelo_bloque = $pieza_dato->getAttribute('config')['modelo_bloque'];
                        $dataModelo[$modelo_bloque][$data['nombre']] = $pieza_dato;
                    }
                    if ($data['forma'] === true && $request->filled('dg-variantes-forma-asociada_' . $i)) {
                        //     $variante     = $ficha[config('fichas.variantes.forma')][1];
                        $forma_bloque = $pieza_dato->getAttribute('config')['forma_bloque'];
                        $dataForma[$request->input('dg-variantes-forma-asociada_' . $i)][$forma_bloque][$data['nombre']] = $pieza_dato;
                    }
                    if ($data['decorativa'] === true && $request->filled('dg-variante-decorativa-asociada_' . $i)) {
                        //     $variante          = $ficha[config('fichas.variantes.decorativa')][1];
                        $decorativa_bloque = $pieza_dato->getAttribute('config')['decorativa_bloque'];

                        $dataDecorativa[$request->input('dg-variante-decorativa-asociada_' . $i)][$decorativa_bloque][$data['nombre']] = $pieza_dato;
                    }
                    if ($data['arqueometrica'] === true && $request->filled('dg-variante-arqueometrica-asociada_' . $i)) {
                        //     $variante             = $ficha[config('fichas.variantes.arqueometrica')][1];
                        $arqueometrica_bloque = $pieza_dato->getAttribute('config')['arqueometrica_bloque'];

                        $dataArqueometrica[$request->input('dg-variante-arqueometrica-asociada_' . $i)][$arqueometrica_bloque][$data['nombre']] = $pieza_dato;
                    }
                }
            }
        }

        $modelo->metadata_modelo        = $dataModelo;
        $modelo->metadata_forma         = $dataForma;
        $modelo->metadata_decorativa    = $dataDecorativa;
        $modelo->metadata_arqueometrica = $dataArqueometrica;
        $modelo->save();

        return response()->json(['request' => $modelo]);
    }
    public function ChangeVariante(Request $request)
    {
        $pieza_clave = PiezaClave::find($request->piezaclave);
        $modelo = Modelo::find($request->modelo);
        if ($request->check == 'true') {
            $pieza_clave_datos = $pieza_clave->datos;
            $array = [];
            foreach ($pieza_clave_datos as $dato) {
                if ($dato['config'][$request->variante] == true) {
                    $array[$dato['config'][$request->variante . '_bloque']][$dato->campo] = $dato;
                }
            }
            switch ($request->variante) {
                case 'forma':
                    $array_ = $modelo->metadata_forma;
                    $array_[$request->codigo] = $array;
                    ksort($array_);
                    $modelo->metadata_forma = $array_;
                    $modelo->save();
                    $variante = $pieza_clave->datos()->where('posicion', 5)->first();
                    $variante->valor = $request->codigo;
                    $variante->save();
                    break;
                case 'decorativa':
                    $array_ = $modelo->metadata_decorativa;
                    $array_[$request->codigo] = $array;
                    ksort($array_);
                    $modelo->metadata_decorativa = $array_;
                    $modelo->save();
                    $variante = $pieza_clave->datos()->where('posicion', 6)->first();
                    $variante->valor = $request->codigo;
                    $variante->save();
                    break;
                default:
                    $array_ = $modelo->metadata_arqueometrica;
                    $array_[$request->codigo] = $array;
                    ksort($array_);
                    $modelo->metadata_arqueometrica = $array_;
                    $modelo->save();
                    $variante = $pieza_clave->datos()->where('posicion', 7)->first();
                    $variante->valor = $request->codigo;
                    $variante->save();
                    break;
            }
        } else {
            $array_ = [];
            switch ($request->variante) {
                case 'forma':
                    $variante = $pieza_clave->datos()->where('posicion', 5)->first();
                    //$array_=$modelo->metadata_forma;
                    foreach ($modelo->metadata_forma as $key => $data) {
                        if ($key != $variante->valor)
                            $array_[$key] = $data;
                    }
                    $modelo->metadata_forma = $array_;
                    $variante->valor = '';
                    $variante->save();
                    $modelo->save();
                    break;
                case 'decorativa':
                    $variante = $pieza_clave->datos()->where('posicion', 6)->first();
                    foreach ($modelo->metadata_decorativa as $key => $data) {
                        if ($key != $variante->valor)
                            $array_[$key] = $data;
                    }
                    $modelo->metadata_decorativa = $array_;
                    $variante->valor = '';
                    $variante->save();
                    $modelo->save();
                    break;
                default:
                    $variante = $pieza_clave->datos()->where('posicion', 7)->first();
                    foreach ($modelo->metadata_arqueometrica as $key => $data) {
                        if ($key != $variante->valor)
                            $array_[$key] = $data;
                    }
                    $modelo->metadata_arqueometrica = $array_;
                    $variante->valor = '';
                    $variante->save();
                    $modelo->save();
                    break;
            }
        }

        return response()->json(['render' => view('admin.fichas.variantes.variante', [
            'modeloMetaData' => $modelo['metadata_' . $request->variante],
            'variante' => $request->variante,
            'modeloModel' => $modelo,
        ])->render(), 'modelo' => view('admin.fichas.variantes.modelo', [
            'modeloMetaData' => $modelo->getModelo(),
            'variante' => 'modelo',
            'modeloModel' => $modelo,
        ])->render()]);
        // switch ($request->variante) {
        //     case 'forma':
        //         return view('admin.fichas.variantes.variante', [
        //             'modeloMetaData' => $modelo->metadata_forma,
        //             'variante' => 'forma',
        //             'modeloModel' => $modelo,
        //         ])->render();
        //         break;
        //     case 'decorativa':
        //         return view('admin.fichas.variantes.variante', [
        //             'modeloMetaData' => $modelo->metadata_decorativa,
        //             'variante' => 'decorativa',
        //             'modeloModel' => $modelo,
        //         ])->render();
        //         break;
        //     default:
        //         return view('admin.fichas.variantes.variante', [
        //             'modeloMetaData' => $modelo->metadata_arqueometrica,
        //             'variante' => 'arqueometrica',
        //             'modeloModel' => $modelo,
        //         ])->render();
        //         break;
        // }
    }

    public function ShowFotos(Request $request)
    {
        $pieza_clave = PiezaClave::find($request->id);
        return view('admin.fichas.variantes.show_fotos', compact('pieza_clave'))->render();
    }
    function subirArchivoFicha(Request $request)
    {
        if ($request->hasFile('ficha')) {
            foreach ($request->file('ficha') as $ficha) {
                try {
                    Excel::import(new FichasImport, $ficha);
                    $modelo = Modelo::ultimo_modelo();
                    $dir    = __DIR__ . '/../../../../public/assets/fichas/' . $modelo->id . '/';
                    try {
                        if (!is_dir($dir)) {
                            mkdir($dir);
                        }
                        $ruta = $dir . $ficha->getClientOriginalName();
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
            return redirect()->route(
                'admin.ficha.editar_ficha',
                ['modelo' => Modelo::ultimo_modelo()->codigo]
            );
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

        $modelos = Modelo::whereIn('id', self::obtenerModelosBusquedaId($collection))->paginate(20);
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

    public function eliminarPiezaClaveEdit(Request $request)
    {
        $pieza_clave = PiezaClave::find($request->pieza);
        $modelo = Modelo::find($pieza_clave->modelo_id);
        $forma = $pieza_clave->datos()->where('posicion', 5)->first();
        $decorativa = $pieza_clave->datos()->where('posicion', 6)->first();
        $arqueometrica = $pieza_clave->datos()->where('posicion', 7)->first();
        if ($forma->valor != '') {
            $array_ = [];
            foreach ($modelo->metadata_forma as $key => $data) {
                if ($key != $forma->valor)
                    $array_[$key] = $data;
            }
            $modelo->metadata_forma = $array_;
            $modelo->save();
        }
        if ($decorativa->valor != '') {
            $array_ = [];
            foreach ($modelo->metadata_decorativa as $key => $data) {
                if ($key != $forma->valor)
                    $array_[$key] = $data;
            }
            $modelo->metadata_forma = $array_;
            $modelo->save();
        }
        if ($arqueometrica->valor != '') {
            $array_ = [];
            foreach ($modelo->metadata_arqueometrica as $key => $data) {
                if ($key != $forma->valor)
                    $array_[$key] = $data;
            }
            $modelo->metadata_forma = $array_;
            $modelo->save();
        }
        DB::table('pieza_clave_datos')->where('pieza_clave_id', $pieza_clave->id)->delete();
        DB::table('pieza_claves')->where('id', $pieza_clave->id)->delete();
        return response()->json(['status' => true]);
    }

    public function actualizarDatoVariante(Request $request)
    {
        $modelo        = Modelo::find($request->get('modelo'));
        $metadata      = $modelo->getAttribute('metadata_' . $request->get('variante'));
        $metadataCampo = "metadata_" . $request->get("variante");
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
        $modelo->fotos()->create(['name' => $path, 'variante' => $variante, 'posicion' => $request->posicion]);
        return view('admin.fichas.variantes.pieza_clave.render.foreach_fotos', ["modelo" => $modelo, 'variante' => $variante])->render();
    }
    /**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  Request  $request
     */
    public function moverFotos(Modelo $modelo, string $variante, Request $request)
    {
        $p = $modelo->fotos()->find($request->id);
        $p->posicion = $request->posicion;
        $p->save();
        return view('admin.fichas.variantes.pieza_clave.render.foreach_fotos', ["modelo" => $modelo, 'variante' => $variante])->render();
    }
    /**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  string  $variante_codigo
     * @param  Request  $request
     */
    public function subir_fotos_variante(string $modelo, string $variante, Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $modelo = Modelo::find($modelo);
        $count=FotosVariante::where('modelo_id',$modelo)->where('variante',$variante)->count();
        $modelo->fotosVariante()->create([
            'variante' => $variante,
            'codigo'   => $request->codigo,
            'foto'     => $path,
            'posicion' => $count
        ]);
        return view(
            'admin.fichas.variantes.pieza_clave.render.foreach_fotos_variantes',
            [
                "modelo" => $modelo,
                "variante" => $variante,
                "varianteCodigo" => $request->codigo,
            ]
        )->render();
    }
    /**
     * @param  Modelo  $modelo
     * @param  string  $variante
     * @param  string  $variante_codigo
     * @param  Request  $request
     */
    public function mover_fotos_variante(Modelo $modelo, string $variante, string $variante_codigo = '', Request $request)
    {
        foreach ($request->orden as $orden) {
            $p = FotosVariante::find($orden["id"]);
            $p->posicion = $orden["index"];
            $p->save();
        }
        return response()->json(['status' => true]);
    }

    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function subir_fotos_pieza_clave(Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $piezaClave = PiezaClave::find($request->id);
        $count = $piezaClave->fotos()->count();
        $piezaClave->fotos()->create(['foto' => $path, 'posicion' => $count]);
        return view('admin.fichas.variantes.pieza_clave.render.foreach_pieza_clave_fotos', ["pieza_clave" => $piezaClave])->render();
    }
    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function mover_fotos_pieza_clave(Request $request)
    {
        foreach ($request->orden as $orden) {
            $p = PiezaClaveFotos::find($orden["id"]);
            $p->posicion = $orden["index"];
            $p->save();
        }

        return response()->json(['status' => true]);
    }

    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function subirDibujos($id, Request $request)
    {
        $path = Fichas::salvarModeloImagen($request, 'file', 600);
        $piezaClave = PiezaClave::find($id);
        $count = $piezaClave->dibujos()->count();
        $piezaClave->dibujos()->create(['foto' => $path, 'posicion' => $count]);
        return view('admin.fichas.variantes.pieza_clave.render.foreach_dibujos', ["pieza_clave" => $piezaClave])->render();
    }

    /**
     * @param  PiezaClave  $piezaClave
     * @param  Request  $request
     */
    public function moverDibujos(Request $request)
    {
        foreach ($request->orden as $orden) {
            $p = PiezaClaveDibujos::find($orden["id"]);
            $p->posicion = $orden["index"];
            $p->save();
        }
        return response()->json(['status' => true]);
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
