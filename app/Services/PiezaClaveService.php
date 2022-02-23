<?php

namespace App\Services;

use App\Models\Listas;
use App\Models\PiezaClave;
use App\Models\PiezaClaveCampos;
use Illuminate\Http\Request;

class PiezaClaveService
{

    public static function SalvarPiezaClave(Request $request, PiezaClave $piezaClave, PiezaClaveCampos $piezaClaveCampo)
    {
        $piezaClaveDato = $piezaClave->datos()
            ->where('pieza_clave_id', $request->get('pieza'))
            ->where('posicion', $piezaClaveCampo->getAttribute('id'))
            ->firstOrFail();

        $piezaClaveDato->valor = self::getValor($request, $piezaClaveDato);
        $piezaClaveDato->save();
    }

    /**
     * @param  Request  $request
     * @param $piezaClaveDato
     * @return mixed
     */
    protected static function getValor(Request $request, $piezaClaveDato)
    {
        $valor = $request->get('val');
        if (!is_null($piezaClaveDato->config['lista']) && $piezaClaveDato->config['lista'] !== 0) {
            $valor = (Listas::findOrFail($piezaClaveDato->config['lista']))->valores()
                ->where('slug', $request->get('val'))
                ->firstOrFail()
                ->getAttribute('valor');

            $piezaClaveDato->valor_slug = $request->get('val');
        }
        return $valor;
    }

}