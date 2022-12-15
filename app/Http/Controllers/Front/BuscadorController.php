<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Traits\BusquedaTrait;
use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuscadorController extends Controller
{

    use BusquedaTrait;

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function obtenerResultados(Request $request)
    {
        session()->flash('todos', DB::table('pieza_clave_datos')
            ->select('pieza_clave_id')
            ->distinct()
            ->get());

        $resultados = self::obtenerModelosBusqueda(self::obtenerBusquedaQuery());
        session()->forget('todos');
        return view('front.page.results', compact('resultados'));
    }
public function obtenerResultadosRender(Request $request)
    {
        session()->flash('todos', DB::table('pieza_clave_datos')
            ->select('pieza_clave_id')
            ->distinct()
            ->get());

        $resultados = self::obtenerModelosBusqueda(self::obtenerBusquedaQuery());
        session()->forget('todos');
        return view('front.page.buscador.select_render', compact('resultados'))->render();
    }
    public function buscador(Request $request)
    {
        return view('front.page.buscador');
    }

    /**
     * Verifica que el formulario de búsqueda esté diligenciado
     *
     * @param  Request  $request
     *
     * @return bool
     */
    public function checkForm(Request $request)
    {
        return true;
    }

}
