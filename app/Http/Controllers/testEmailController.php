<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Mail\testEmail;

use DB;
use Mail;

class testEmailController extends Controller
{
    public function send(Request $request){
	 $name=$request->input("username");
	 $email=$request->input("email");
	 // $password=$request->input("password");
	 $users=user::where('name',$name)
			 ->first();
	 //$results = DB::table("users")->select('select * from users where name', ['id' => 1]);
	 if($users==null){
	     DB::insert('insert into users (name,email,password) values (?, ?, ?)',[$name,$email,123456]);
	 }
	// Mail::send($request->input('email'))
	 Mail::to($email)->send(new testEmail());
    }

}
