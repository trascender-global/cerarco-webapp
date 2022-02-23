<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTrait;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    use ImageTrait;

    public function upload(Request $request)
    {
        $file        = new File($request->file('file'));
        $filePath    = self::putFile($file, 'public');
        $path        = storage_path('app/public/'.$filePath);
        $storagePath = storage_path('../public/assets/images/tiny-'.$file->hashName());
        self::saveImage($path, $storagePath);
        return response()->json(['location' => asset('assets/images/tiny-'.$file->hashName())]);

    }
}
