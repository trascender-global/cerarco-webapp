<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarMenuRequest;
use App\Models\GlosarioContenido;
use App\Models\GlosarioMenu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class GlosarioController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.glosario.index', ['menus' => GlosarioMenu::EsTitulo()->get()]);
    }

    public function salvarMenuTitulo(GlosarioMenu $menu, Request $request)
    {
        $menu->nombre = $request->get('titulo');
        $menu->slug   = Str::kebab(Str::lower($request->get('titulo')));
        $menu->save();
    }

    public function editarMenu(?GlosarioMenu $menu)
    {
        if (is_null($menu->id)) {
            return view('admin.glosario.index', ['menus' => GlosarioMenu::EsTitulo()->get()]);
        }

        if (is_null($menu->contenido)) {
            $menu->contenido = $menu->contenido()->create();
        }
        return view('admin.glosario.editar_menu', compact('menu'));
    }

    public function salvarMenu(?GlosarioContenido $contenido, Request $request)
    {
        if (!is_null($contenido)) {
            $contenido->setAttribute('contenido', $request->get('contenido'));
            $contenido->save();
            return redirect()->route('admin.glosario.editar_menu', ['menu' => $contenido->menu]);
        }
        return view('admin.glosario.index', ['menus' => GlosarioMenu::EsTitulo()->get()]);
    }

    public function nuevoMenu(GlosarioMenu $menu)
    {
        return view('admin.glosario.nuevo_menu', compact('menu'));
    }

    public function salvarNuevoMenu(GuardarMenuRequest $requset, GlosarioMenu $menu)
    {
        Schema::disableForeignKeyConstraints();

        GlosarioMenu::create([
            'nombre'           => $requset->get('nombre'),
            'slug'             => Str::kebab($requset->get('nombre')),
            'glosario_menu_id' => is_null($menu->getAttribute('id')) ? 0 : $menu->getAttribute('id'),
            'titulo'           => !$menu->titulo,
        ]);

        return redirect()->route('admin.glosario.listado');
    }
}
