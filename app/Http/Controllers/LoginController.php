<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Member;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller{
    
    //for login page view
    public function index(){
        return view('universal-login');
    }
    // Checking auth use
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:8|',
        ]);
        $authUserInfo = Login::where('email',$request->email)->first();
        if(!$authUserInfo || !Hash::check($request->password,$authUserInfo->password)){
            return back()->with('loginfailed','Invalid credentials');
        }
        else{
             $request->session()->put('loggedUser',$authUserInfo->id);
             $userdata = ['userinfo'=>Login::where('id','=',session('loggedUser'))->first()];
             $userdata1 = Login::where('email','=',$request->email)->first();
            if($authUserInfo->user_type == 'public'){
                return view('Public.publicpage',$userdata);
            }
            else if($authUserInfo->user_type == 'register'){
                return view('Register.register-dashboard',$userdata);
            }

        }
    }
    // Logout user
    public function logout() {
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/');
        }

    }

    // for public page view

    public function Public_page(){
        return view('Public.publicpage');
    }
    public function Profile(){
        // $userdata = session('loggedUser')->first();
        $getId = Session('loggedUser');
        dd(Login::find($getId));
        return view('profile');
    }


}
