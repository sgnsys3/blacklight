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
        if($info == NULL)
        	return -1;
        else return $info;
    }

    public function currentID() {
    	$info = regis_info::where('status','=','1')->first();
        if($info == NULL)
        	return -1;
        else return $info->id;
    }
}
