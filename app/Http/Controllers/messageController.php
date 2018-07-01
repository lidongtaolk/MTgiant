<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Message;
use app\User;
use DB;

class messageController extends Controller
{
    public function save(Request $request){
        $name=$request->input("username");
        $email=$request->input("email");
        $message=$request->input("message");
        $user=User::where("name",$name)
              ->first();
        if($user==null){
            DB::insert('insert into users (name,email,password) values (?, ?, ?)',[$name,$email,123456]);
        }
        DB::insert('insert int messages (name,parent_id,message) values (?, ?, ?)',[$name,0,$message]);
    }
    public function show(){
        $message=Message::all();
    }
}
