<?php


namespace App\Services;


use App\Http\Traits\ImageTrait;
use App\Models\Modelo;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class Fichas
{ 

    use ImageTrait;

    /**
     * @param  Request  $request
     * @param $file
     * @param  int  $width
     * @return string
     */
    public static function salvarModeloImagen(Request $request, $file, $width = 200): string
    {
        [$file, $path] = self::getAndputFile($request, $file, 'local_originales');
        /*self::resizeImage(self::getStoragePath('app/originales/', $path), $width)
            ->save(storage_path('../public/assets/modelos/'.$file->hashName()));*/
        return $file->hashName();
    }

    /**
     * @param  Modelo  $modelo
     * @param  string  $file
     * @return string
     */
    public static function getDibujoFileName(Modelo $modelo, string $file): string
    {
        return $file;
    }

}