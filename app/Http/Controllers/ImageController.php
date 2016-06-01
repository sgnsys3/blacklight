<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

class ImageController extends Controller
{

    public function download($img_name){

        $path = 'uploads/img/' . $img_name;

        if( ! Storage::exists($path) ) return;

        $file = Storage::get($path);
        $type = Storage::mimeType($path);

        $response = response()->make($file, 200);
        $response->header("Content-Type", $type);

        return $response;

    }

}
