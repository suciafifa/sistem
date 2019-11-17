<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
    	if (!Session::get('login')){
    		return view('login.login');
    	}else{
    		return redirect()->route('login');
    	}
    }
}
