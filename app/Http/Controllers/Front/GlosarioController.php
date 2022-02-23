<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GlosarioContenido;
use App\Models\GlosarioMenu;
use Illuminate\Http\Request;

class GlosarioController extends Controller
{

    public function glosario(Request $request)
    {
        $menus      = GlosarioMenu::MenuPrincipal()->get();
        $contenidos = collect([]);
        return view('front.page.glosario', compact('menus', 'contenidos'));
    }

    public function busqueda(Request $request)
    {
        session()->flash('busqueda', $request->get('busqueda'));

        $contenidos = GlosarioContenido::where('contenido', 'like', '%'.$request->get('busqueda').'%')->get();
        $menus      = GlosarioMenu::MenuPrincipal()->get();
        return view('front.page.glosario', compact('menus', 'contenidos'));

    }

}
