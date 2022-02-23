<?php


namespace App\Http\Traits;


use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as ImageIntervention;

trait ImageTrait
{

    public static function resizeImage($path, $width = null, $height = null)
    {
        return ImageIntervention::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
    }

    /**
     * @param $path
     * @param $storagePath
     */
    public static function saveImage($path, $storagePath)
    {
        ImageIntervention::make($path)
            ->save($storagePath);
    }

    /**
     * @param $path
     * @param $file
     * @return string
     */
    private static function getStoragePath($path, $file): string
    {
        return storage_path($path.$file);
    }

    /**
     * @param  Request  $request
     * @return array
     */
    private static function getAndputFile(Request $request, $file, $disk = 'local'): array
    {
        $file = self::getFile($request, $file);
        $path = self::putFile($file, $disk);
        return [$file, $path];
    }

    /**
     * @param  Request  $request
     * @param $file
     * @return File
     */
    private static function getFile(Request $request, $file): File
    {
        return new File($request->file($file));
    }

    /**
     * @param  File  $file
     * @param  string  $disk
     * @return string|false
     */
    private static function putFile(File $file, $disk = 'local')
    {
        return Storage::disk($disk)->put('', $file, 'public');
    }

}