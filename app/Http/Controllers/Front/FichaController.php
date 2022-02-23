<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Modelo;
use Illuminate\Http\Request;

class FichaController extends Controller
{

    public function datosGenerales(Modelo $modelo, Request $request)
    {
        $detalle = $modelo->metadata_modelo ?? [];
        return view('front.page.fichas.datos_generales', compact('modelo', 'detalle'));
    }

    public function informacionFicha(Modelo $modelo)
    {
        return view('front.page.fichas.informacion_ficha', compact('modelo'));
    }

    public function varianteForma(Modelo $modelo, Request $request)
    {
        $fotos = $modelo->fotosForma()->get();
        return view('front.page.fichas.variante_forma', compact('modelo', 'fotos'));
    }

    public function detalleVarianteForma(Modelo $modelo, string $codigo, Request $request)
    {
        $detalle = $modelo->metadata_forma[$codigo] ?? [];
        if (empty($detalle)) {
            return redirect()->route('front.home');
        }
        $fotos = $modelo->fotoDetalleForma()->codigo($codigo)->get();
        return view('front.page.fichas.detalle_variante_forma', compact('modelo', 'fotos', 'detalle', 'codigo'));

    }

    public function detalleVarianteDecorativa(Modelo $modelo, string $codigo, Request $request)
    {
        $detalle = $modelo->metadata_decorativa[$codigo] ?? [];
        if (empty($detalle)) {
            return redirect()->route('front.home');
        }
        $fotos = $modelo->fotosDecorativas()->codigo($codigo)->get();
        return view('front.page.fichas.detalle_variante_decorativa', compact('modelo', 'fotos', 'detalle', 'codigo'));

    }


    public function detalleVarianteArqueometrica(Modelo $modelo, string $codigo, Request $request)
    {
        $codigo  = $codigo === '-' ? '' : $codigo;
        $detalle = $modelo->metadata_arqueometrica[$codigo] ?? [];
        if (empty($detalle)) {
            return redirect()->route('front.home');
        }
        $fotos = $modelo->fotoDetalleArqueometrica()->codigo($codigo)->get();
        return view('front.page.fichas.detalle_variante_arqueometrica', compact('modelo', 'fotos', 'detalle', 'codigo'));

    }

    public function varianteArqueometrica(Modelo $modelo, Request $request)
    {
        $fotos = $modelo->fotosArqueometricas()->get();
        return view('front.page.fichas.variante_arqueometrica', compact('modelo', 'fotos'));
    }

    public function varianteDecorativa(Modelo $modelo, Request $request)
    {
        $fotos = [];
        $modelo->fotosDecorativas()->get()->map(function ($foto) use (&$fotos) {
            $fotos[$foto->codigo][] = collect($foto);
        });

        $fotos_fiinal = collect();
        collect($fotos)->map(function ($foto) use ($fotos_fiinal) {
            $fotos_fiinal->push(collect($foto)->random());
        });
        return view('front.page.fichas.variante_decorativa', ['modelo' => $modelo, 'fotos' => $fotos_fiinal]);
    }

    public function piezasClave(Modelo $modelo, Request $request)
    {
        return view('front.page.fichas.piezas_clave', compact('modelo'));
    }

}
