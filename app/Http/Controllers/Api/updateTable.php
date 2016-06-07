<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;
use Storage;

class updateTable extends ApiController
{
    public function show() {
        $info = regis_info::orderBy('id')->get()->toArray();
        return $info;
    }
}
