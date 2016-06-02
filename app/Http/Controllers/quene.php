<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;
use Storage;

class quene extends Controller
{
    public function show(Request $request) {
        $info = regis_info::where("status" ,"=",1)->first();
        if($info != NULL) {
                return view('display' , [
                    'diagid' => $info->id ,
                    'firstname' => $info->firstname ,
                    'lastname' => $info->lastname ,
                    'nickname' => $info->nickname ,
                    'age' => $info->age ,
                    'weight' => $info->weight ,
                    'height' => $info->height ,
                    'education' => $info->education ,
                    'port' => $info->port ,
                    'modeling' => $info->modeling ,
                    'email' => $info->email ,
                    'tel_self' => $info->tel_self ,
                    'tel_modeling' => $info->tel_modeling ,
                    'image' => $info->img_name ,
                    ]);
        }
        else {
            return view('display' , ['empty' => 1]);
        }
    }

    public function submitcast(Request $request) {
        $info = regis_info::where("id","=",$request->input('diagid'))->first();
        $info->status = 2;
        $info->save();
        return redirect()->action('quene@show');
    }

    public function currentDisplay() {
        $info = regis_info::where("casted","=",0)->first();
        return view('currentquene' , ['info' => $info]);
    }
}
