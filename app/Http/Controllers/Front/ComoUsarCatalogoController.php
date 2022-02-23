<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contenido;
use Illuminate\Http\Request;

class ComoUsarCatalogoController extends Controller
{
    public function usarCatalogo(Request $request)
    {
        $contenido = (new Contenido())->catalogo()->get()->first();
        if (is_null($contenido)) {
            $contenido = new Contenido();
        }
        $url    = 'front.talleres_virtules.ver_talleres_virtules';
        $titulo = is_null($contenido->titulo) ? "¿Cómo usar el catálogo?" : $contenido->titulo;
        return view('front.page.catalogo', compact('contenido', 'url', 'titulo'));
    }

}
