<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\ValidationException;


class MemberController extends Controller{

    // Universal login view
    public function index(){
        return view('universal-login');
    }

    public function viewregister(){
        return view("register");
    }

    public function dashboard(){
        return view('Public.dashboard');
    }
   
    public function addemployees(){
        return view('register.add-employees');
    }
    public function register(Request $request)
    {
        $member = new Member();
        $member->name = $request->has('name') ? $request->get('name') : "";
        $member->email = $request->has('email') ? $request->get('email') : "";
        $member->password = Hash::make($request->has('password') ? $request->get('password') : "");
        $member->membertype = $request->has('membertype') ? $request->get('membertype') : "public";
        $member->save();
    }

    // Universal login method
    public function login(Request $request)
    {
        $member = Member::where('email', $request->email)->first();
        if (!$member || !Hash::check($request->password, $member->password)) {
            return back()->with('loginfailed', 'Invalid credentials');
        } else {
                if($member->membertype == "public") {

                    return view('Public.public');
                }
                else if($member->membertype == "register"){
                    return view('Register.register-dashboard');
                }
        }
    }
}
