<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;
use Throwable;
use Illuminate\Support\Facades\File; 
class Modelos
{

    public static function borrarModelo(Model $modelo)
    {
        try {
            if ($modelo->foto) {
                if (File::exists(public_path('assets/modelos/'.$modelo->getAttributes()['foto']))) {
                    File::delete(public_path('assets/modelos/'.$modelo->getAttributes()['foto']));
                } else {
                    dd('File does not exists. '.public_path('assets/modelos/ '.$modelo->getAttributes()['foto']));
                }
            }
            $modelo->delete();
            return response()->json(['success' => 1]);
        } catch (Throwable $t) {
            return response()->json('error')
                ->setStatusCode(500);
        }
    }
}
