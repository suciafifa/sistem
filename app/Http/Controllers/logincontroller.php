<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class logincontroller extends Controller
{
    public function index(Request $request){
    	$username=$request->username;
    	$password=$request->password;
    	$data= Users::where('username', $username)
    	->first();
    	if($data!=""){
    		if(Hash::check($password,$data->password)){
    			Session::put('id', $data->id);
    			Session::put('username', $data->username);
    			Session::put('email', $data->email);
    			Session::put('login', TRUE);
    			return redirect()->route('home');
    		}
    		else{
    			dd('error');
    		}
    	}
    	else{
    		return redirect('/')->with('error','username or password invalid!');
    	}
    }
    public function logout(){
    Session::flush();
    return redirect('/');
}

        
    }
