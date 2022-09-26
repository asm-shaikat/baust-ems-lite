<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Login;
use App\Models\Member;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            'password' => 'required|min:5',
        ]);
        $authUserInfo = Login::where('email',$request->email)->first();
        if(!$authUserInfo && !Hash::check($request->password,$authUserInfo->password)){
            return back()->with('loginfailed','Invalid credentials');
        }
        else{
              $request->session()->put('loggedUserEmail',$authUserInfo->email);             
            //  $userdata = ['userinfo'=>Login::where('email','=',session('loggedUserEmail'))->first()];
                
                
            if($authUserInfo->user_type == 'public'){
                return view('Public.publicpage');
            }
            else if($authUserInfo->user_type == 'register'){
                // $getAllStudentdata = DB::table('students')->get()->all();
                $countCurrentStudent = DB::table('students')->where('active',1)->count();
                $countPassStudent = DB::table('students')->where('active',0)->count();

                return view('Register.home',compact('countCurrentStudent','countPassStudent'));
            } 
            else if ($authUserInfo->user_type == 'recruiter') {
                $getSessionUserEmail = Session('loggedUserEmail');
                $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                $data = json_decode($send_data);
                return view('Recruiter.recruiter-dashboard',compact('data'));
            }

        }
    }
    // Logout user
    public function logout() {
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }

    // for public page view

    public function Public_page(){
        return view('Public.publicpage');
    }
    public function Profile(Request $request){
        $getSessionUserEmail = Session('loggedUserEmail');
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        $data = json_decode($send_data);
        return view('profile',compact('data'));
    }
    
    public function add_student(){
        return view('Recruiter.add-student');
    }
    


}
