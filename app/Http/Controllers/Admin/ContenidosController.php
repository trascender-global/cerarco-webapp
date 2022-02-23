<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use App\Services\Contenidos;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Throwable;

class ContenidosController extends Controller
{

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function catalogo(Request $request)
    {
        $contenido = (new Contenido)->catalogo()->first();
        if (is_null($contenido)) {
            $contenido = Contenido::create(['user_id' => Auth::user()->id]);
        }
        $titulo = '¿Cómo utilizar el catálogo?';
        $ruta   = 'admin.contenido.salvarCatalogo';
        return view('admin.contenidos.catalogo', compact('contenido', 'titulo', 'ruta'));
    }

    /**
     * @param  Contenido  $contenido
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function salvarCatalogo(Contenido $contenido, Request $request)
    {
        $contenido->contenido = $request->get('contenido');
        $contenido->titulo    = $request->get('titulo');
        $contenido->imagen    = '';
        $contenido->save();
        return redirect()->route('admin.contenido.catalogo');
    }

    public function borrarTaller(Contenido $contenido)
    {
        $contenido->delete();
        return $this->listadoTalleres();
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function listadoTalleres()
    {
        $titulo      = "Talleres Virtuales";
        $contenidos  = (new Contenido)->talleres()->get();
        $nuevo       = "Nuevo Taller";
        $nueva_ruta  = "admin.contenido.nuevo_taller";
        $link_editar = "admin.contenido.editar_taller";
        $link_borrar = "admin.contenido.borrar_taller";
        return view('admin.contenidos.listado_contenidos', compact('contenidos', 'titulo', 'nuevo', 'link_editar', 'nueva_ruta', 'link_borrar'));
    }

    public function borrarNoticia(Contenido $contenido)
    {
        $contenido->delete();
        return $this->listadoNoticias();
    }

    /**
     * @return Application|Factory|View
     */
    public function listadoNoticias()
    {
        $titulo      = "Noticias";
        $nuevo       = "Nueva Noticia";
        $nueva_ruta  = "admin.contenido.nueva_noticia";
        $link_editar = "admin.contenido.editar_noticia";
        $link_borrar = "admin.contenido.borrar_noticia";
        $contenidos  = (new Contenido)->noticias()->get();
        return view('admin.contenidos.listado_contenidos', compact('contenidos', 'titulo', 'nuevo', 'link_editar', 'nueva_ruta', 'link_borrar'));
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function nuevoTaller(Request $request)
    {
        $titulo = 'Nuevo Taller Virtual';
        $ruta   = 'admin.contenido.salvarTaller';
        return view('admin.contenidos.catalogo', compact('titulo', 'ruta'));
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function nuevaNoticia(Request $request)
    {
        $titulo = 'Nueva Noticia';
        $ruta   = 'admin.contenido.salvarNoticia';
        return view('admin.contenidos.catalogo', compact('titulo', 'ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Contenido  $contenido
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function salvarTaller(Contenido $contenido, Request $request)
    {
        try {
            $contenido->contenido = $request->get('contenido');
            $contenido->titulo    = $request->get('titulo');
            $contenido->user_id   = Auth::user()->id;
            $contenido->tipo      = 'talleres';
            $contenido->save();
            return redirect()->route('admin.contenido.editar_taller', compact('contenido'));
        } catch (Throwable $t) {
            session()->flash('mensaje', 'Error al guardar el taller');
            session()->flash('type', 'danger');
            return redirect()->route('admin.contenido.talleres');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Contenido  $contenido
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function salvarNoticia(Contenido $contenido, Request $request)
    {
        try {
            $contenido->contenido = $request->get('contenido');
            $contenido->titulo    = $request->get('titulo');
            $contenido->user_id   = Auth::user()->id;
            $contenido->tipo      = 'noticias';
            $contenido->save();
            return redirect()->route('admin.contenido.editar_noticia', compact('contenido'));
        } catch (Throwable $t) {
            session()->flash('mensaje', 'Error al guardar el taller');
            session()->flash('type', 'danger');
            return redirect()->route('admin.contenido.noticias');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Contenido  $contenido
     * @return Application|Factory|View
     */
    public function editarTaller(Request $request, Contenido $contenido)
    {
        $titulo = 'Editar Taller Virtual';
        $ruta   = 'admin.contenido.salvarTaller';
        return view('admin.contenidos.catalogo', compact('contenido', 'titulo', 'ruta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @param  Contenido  $contenido
     * @return Application|Factory|View
     */
    public function editarNoticia(Request $request, Contenido $contenido)
    {
        $titulo = 'Editar Noticia';
        $ruta   = 'admin.contenido.salvarNoticia';
        return view('admin.contenidos.catalogo', compact('contenido', 'titulo', 'ruta'));
    }

    public function subirImagen(Request $request, Contenido $contenido)
    {
        $path = Contenidos::salvarImagenContenido($request, 'file', 400);

        $contenido->imagen = $path;
        $contenido->save();
    }
}
