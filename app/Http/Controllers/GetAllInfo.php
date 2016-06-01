<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;

class GetAllInfo extends Controller
{
    public function show(Request $request) {
        $info = regis_info::orderBy('id')->get();
        return view('allinfo' , ['allinfo' => $info]);
    }

    public function skipUser(Request $request) {
    	$info = regis_info::where("id" , "=" , $request->input('skipID'))->first();
        if($info->status == 1) $info->status = 3;
        elseif ($info->status == 3) $info->status = 1;
    	$info->save();
    	return redirect()->action('GetAllInfo@show');
    }
}
