<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{

    public function noticias(Request $request)
    {
        $contenidos = (new Contenido())->noticias()->get();
        $url        = 'front.noticias.ver_noticia';
        $titulo     = "Noticias";
        return view('front.page.contenidos', compact('contenidos', 'url', 'titulo'));
    }

    public function verNoticia(Contenido $contenido, Request $request)
    {
        $titulo        = 'Taller Virtual';
        $titulo_plural = "Talleres Virtuales";
        return view('front.page.contenido.ver_contenido', compact('contenido', 'titulo', 'titulo_plural'));
    }

}
