<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;
use Throwable;

class Modelos
{

    public static function borrarModelo(Model $modelo)
    {
        try {
            $modelo->delete();
            return response()->json(['success' => 1]);
        } catch (Throwable $t) {
            return response()->json('error')
                ->setStatusCode(500);
        }
    }
}