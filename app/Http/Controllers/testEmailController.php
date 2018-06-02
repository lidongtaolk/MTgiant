<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

use DB;
use Mail;

class testEmailController extends Controller
{
    public function send(Request $request){
	 $name=$request->input("username");
	 $email=$request->input("email");
	 $users=App\user::where('name',$name)
			 ->first();
	 //$results = DB::table("users")->select('select * from users where name', ['id' => 1]);
	 if($users==null){
	     DB::table("users")->insert('insert into users (name,email) values (?, ?)',[$name,$email]);
	 }
	// Mail::send($request->input('email'))
    }

}
