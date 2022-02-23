<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use Illuminate\Http\Request;

class TallerVirtualController extends Controller
{
    public function tallerres(Request $request)
    {
        $contenidos = (new Contenido())->talleres()->get();
        $url        = 'front.talleres_virtules.ver_talleres_virtules';
        $titulo     = "Taller Virtual";
        return view('front.page.contenidos', compact('contenidos', 'url', 'titulo'));
    }

    public function verNoticia(Contenido $contenido, Request $request)
    {
        $titulo        = 'Taller Virtual';
        $titulo_plural = "Talleres Virtuales";
        return view('front.page.contenido.ver_contenido', compact('contenido', 'titulo', 'titulo_plural'));
    }

}
