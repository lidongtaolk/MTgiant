<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\user;
use DB;

class messageController extends Controller
{
    public function save(Request $request){
        $name=$request->input("username");
        $email=$request->input("email");
        $message=$request->input("message");
        $user=user::where("name",$name)
              ->first();
        if($user==null){
            DB::insert('insert into users (name,email,password) values (?, ?, ?)',[$name,$email,123456]);
        }
        DB::insert('insert into messages (name,parent_id,message) values (?, ?, ?)',[$name,0,$message]);
    	return back();
    }
    public function show(){
        $messages=Message::all();
        $array=[];
        $i=sizeof($messages);
        for($k=0;$k<=10&&$i!=0;$k++){
            array_push($array,$messages[$i-1]);
            $i--;
        }
        return $array;
    }
}
