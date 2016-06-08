<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;
use Storage;

class countQuene extends ApiController
{
    public function show() {
        $info = regis_info::where('status','=','1')->get()->count();
        return $info;
    }
}
