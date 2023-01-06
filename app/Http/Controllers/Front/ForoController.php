<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use Illuminate\Http\Request;

class ForoController extends Controller
{
    /**
     * Set contenido, url and titulo props for the Foro view
     *
     * @param void $request // Illuminate Request
     * @return void $view // Route for the Foro view
     */
    public function foro(Request $request)
    {
        $contenido = (new Contenido())->foro()->get();
        $url = 'front.foro.ver_foro';
        $titulo = 'Foro';
        return view('front.page.foro.discusion', compact('contenido', 'url', 'titulo'));
    }

}
