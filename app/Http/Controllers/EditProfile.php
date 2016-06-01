<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;
use Storage;

class EditProfile extends Controller
{
    public function show($id) {
        $info = regis_info::where("id" ,"=",$id)->first();
            return view('editprofile' , [
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

    public function submitedit(Request $request,$id) {
        $info = regis_info::where("id" ,"=",$id)->first();
        $info->firstname = $request->input("firstname");
        $info->lastname = $request->input("lastname");
        $info->nickname = $request->input("nickname");
        $info->age = $request->input("age");
        $info->weight = $request->input("weight");
        $info->height = $request->input("height");
        $info->education = $request->input("education");
        $info->port = $request->input("port");
        $info->modeling = $request->input("modeling");
        $info->email = $request->input("email");
        $info->tel_self = $request->input("tel_self");
        $info->tel_modeling = $request->input("tel_modeling");
        if($request->file('image') != "") {
            $info->status = 1;
            $file = $request->file("image");
            $name = $request->input("firstname") . "-" . $request->input("lastname").".jpg";
            $file = $file->move(storage_path('app/uploads/img'), $name);
            $info->img_name = $name;
        }
        $info->save();
            return view('editprofile' , [
                'successful' => 1 ,
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
}
