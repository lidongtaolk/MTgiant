<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Mail;

class testEmailController extends Controller
{
    public function send(Request $request){
	 $name=$request->input("username");
	 $email=$request->input("email");
	 if($name==null){
	     DB::table("users")->insert('insert into users (name,email) values (?, ?)',[$name,$email]);
	 }
	// Mail::send($request->input('email'))
    }

}
