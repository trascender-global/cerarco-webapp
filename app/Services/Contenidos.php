<?php


namespace App\Services;


use App\Http\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Contenidos
{

    use ImageTrait;

    /**
     * @param  Request  $request
     * @param $file
     * @param  int  $width
     * @return string
     */
    public static function salvarImagenContenido(Request $request, $file, $width = 200): string
    {
        [$file, $path] = self::getAndputFile($request, $file, 'local_originales');
        self::resizeImage(self::getStoragePath('app/originales/', $path), $width)
            ->save(storage_path('../public/assets/contenidos/'.$file->hashName()));
        return $file->hashName();
    }

}