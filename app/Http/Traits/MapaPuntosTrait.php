<?php


namespace App\Http\Traits;


use App\Models\MapaPunto;
use App\Models\PiezaClave;
use Illuminate\Database\Eloquent\Collection as CollectionEloquent;
use Illuminate\Support\Collection;

trait MapaPuntosTrait
{

    /**
     * @param  PiezaClave  $pieza_clave
     * @param  string  $puntos
     * @return Collection
     */
    private static function puntosExistentes(PiezaClave $pieza_clave, string $puntos)
    {
        return collect(json_decode($puntos))->map(function ($punto) use ($pieza_clave) {
            if (MapaPunto::lat($punto->lat)->lng($punto->lng)->where('pieza_clave_id', $pieza_clave->id)->exists()) {
                return MapaPunto::lat($punto->lat)
                    ->lng($punto->lng)
                    ->where('pieza_clave_id', $pieza_clave->id)
                    ->first()->id;
            }
        })->reject(function ($value) {
            return is_null($value);
        });
    }

    /**
     * @param  PiezaClave  $pieza_clave
     * @param  string  $puntos
     * @return CollectionEloquent
     */
    protected static function getPuntosNoExisten(PiezaClave $pieza_clave, string $puntos): CollectionEloquent
    {
        return $pieza_clave->puntos()->whereNotIn('id', self::puntosExistentes($pieza_clave,$puntos))->get();
    }

}