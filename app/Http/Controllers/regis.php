<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\regis_info;
use Storage;

class regis extends Controller
{
    public function regis(Request $request) {
        $info = regis_info::firstOrNew(["firstname" => $request->input("firstname") ,
                                        "lastname" => $request->input("lastname") 
        ]);
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
            $file = $request->file("image");
            $name = $request->input("firstname") . "-" . $request->input("lastname").".jpg";
            $file = $file->move(storage_path('app/uploads/img'), $name);
            $info->img_name = $name;
            $info->status = 1;
        }
        $info->save();
        return view('welcome' , ['successful' => 1]);
    }

    // public function chooseType(){
    //     return view('firsttimeregis.step1');
    // }

    // public function takePhoto(Request $request){
    //     return view('firsttimeregis.step2', ['camp_id' => $request->input("camp_id")]);
    // }

    // public function information(Request $request){
    //     return view('firsttimeregis.step3', ['camp_id' => $request->input("camp_id")]);
    // }

    // public function register(Request $request){
    //     $camp_id = $request->input("camp_id");
    //     $user = UserProfile::where("camp_id", "=", $camp_id)->get()->first();
    //     $all = $request->all();
    //     foreach(array_keys($all) as $field){
    //         if($field != "_token"){
    //             $user->$field = $all[$field];
    //         }
    //     }
    //     $user->save();
    //     return view('firsttimeregis.step4', ['camp_id' => $request->input("camp_id")]);
    // }

    // public function finish(Request $request){
    //     if( UserProfile::where("camp_id", "=", $request->input("camp_id"))->get()->first()['user_id'] != null){
    //         $user = User::where("id", "=", UserProfile::where("camp_id", "=", $request->input("camp_id"))->get()->first()['user_id'])->first();
    //     }else if( User::where("email", "=", $request->input('email'))->orWhere("name", "=", $request->input('username'))->get()->count() > 0 ){
    //         return view('firsttimeregis.step4', ['camp_id' => $request->input("camp_id"), 'withError' => true]);
    //     }else{
    //         $user = User::firstOrNew([ "email" => $request->input('email'), "name" => $request->input('username') ]);
    //     }
    //     $user->password = bcrypt($request->input('password'));
    //     $user->save();
    //     $user->roles()->sync([Role::where('name', '=' ,'user')->first()->id]);
    //     $userProfile = UserProfile::where("camp_id", "=", $request->input("camp_id"))->get()->first();
    //     $user_id = 'user_id';
    //     $userProfile->$user_id = $user->id;
    //     $userProfile->save();
    //     return view('firsttimeregis.step5', ['camp_id' => $request->input("camp_id")]);
    // }

}
