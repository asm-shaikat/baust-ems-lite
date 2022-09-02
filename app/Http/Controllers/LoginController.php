<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{
    
    //for login page view
    public function index(){
        return view('universal-login');
    }

    // for public page view

    public function Public_page(){
        return view('Public.publicpage');
    }



}
