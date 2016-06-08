<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;
use Storage;

class Quene extends ApiController
{
    public function count() {
        $info = regis_info::where('status','=','1')->get()->count();
        return $info;
    }

    public function currentID() {
    	$info = regis_info::where('status','=','1')->first();
    	return $info->id;
    }
}
