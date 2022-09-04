<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Member;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\ValidationException;


class MemberController extends Controller{

    // temporarily register form
    public function viewregister(){
        return view("register");
    }
   
    public function addemployees(){
        return view('register.add-employees');
    }
    public function register(Request $request)
    {
        $member = new Login();
        $member->email = $request->has('email') ? $request->get('email') : "";
        $member->password = Hash::make($request->has('password') ? $request->get('password') : "");
        $member->phone = Hash::make($request->has('password') ? $request->get('password') : "");        
        $member->user_type = $request->has('user_type') ? $request->get('user_type') : "public";
        $member->save();
    }

   
    
}
