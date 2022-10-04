<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Login;
use App\Models\Member;
use App\Models\Student;
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
        if(!$authUserInfo)
        {
            return back()->with('loginfailed', 'Email Does Not Exist');
        }
        else if($authUserInfo && !Hash::check($request->password,$authUserInfo->password)){
            return back()->with('loginfailed','Wrong Password');
        }
        else{
              $request->session()->put('loggedUserEmail',$authUserInfo->email);             
            //  $userdata = ['userinfo'=>Login::where('email','=',session('loggedUserEmail'))->first()];
                
                
            if($authUserInfo->user_type == 'public'){
                return view('Public.publicpage');
            }
            else if($authUserInfo->user_type == 'register'){
                $countCurrentEmployees = DB::table('edetails')->where('active', 1)->count();
                $countLeaveEmployees = DB::table('edetails')->where('active', 0)->count();
                $countCurrentStudentCSE = DB::table('students')->where('active', 1)->where('dept', "CSE")->count();
                $countPassStudentCSE = DB::table('students')->where('active', 0)->where('dept', "CSE")->count();
                $countCurrentStudentEEE= DB::table('students')->where('active', 1)->where('dept', "EEE")->count();
                $countPassStudentEEE = DB::table('students')->where('active', 0)->where('dept', "EEE")->count();
                $countCurrentStudentME = DB::table('students')->where('active', 1)->where('dept', "ME")->count();
                $countPassStudentME = DB::table('students')->where('active', 0)->where('dept', "ME")->count();
                $countCurrentStudentICT = DB::table('students')->where('active', 1)->where('dept', "ICT")->count();
                $countPassStudentICT = DB::table('students')->where('active', 0)->where('dept', "ICT")->count();
                $countCurrentStudentCE = DB::table('students')->where('active', 1)->where('dept', "CE")->count();
                $countPassStudentCE = DB::table('students')->where('active', 0)->where('dept', "CE")->count();
                $countCurrentStudentIPE = DB::table('students')->where('active', 1)->where('dept', "IPE")->count();
                $countPassStudentIPE = DB::table('students')->where('active', 0)->where('dept', "IPE")->count();
                $countCurrentStudentBBA = DB::table('students')->where('active', 1)->where('dept', "BBA")->count();
                $countPassStudentBBA = DB::table('students')->where('active', 0)->where('dept', "BBA")->count();
                $countCurrentStudentENGLISH = DB::table('students')->where('active', 1)->where('dept', "ENGLISH")->count();
                $countPassStudentENGLISH = DB::table('students')->where('active', 0)->where('dept', "ENGLISH")->count();
                
                return view('Register.home', compact('countCurrentEmployees','countLeaveEmployees','countCurrentStudentCSE', 'countPassStudentCSE','countCurrentStudentEEE', 'countPassStudentEEE','countCurrentStudentME', 'countPassStudentME','countCurrentStudentICT', 'countPassStudentICT','countCurrentStudentCE', 'countPassStudentCE','countCurrentStudentIPE', 'countPassStudentIPE','countCurrentStudentBBA', 'countPassStudentBBA','countCurrentStudentENGLISH', 'countPassStudentENGLISH'));
            } 
            else if ($authUserInfo->user_type == 'recruiter') {
                $getSessionUserEmail = Session('loggedUserEmail');
                $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                $data = json_decode($send_data);
                return view('Recruiter.recruiter-dashboard',compact('data'));
            }
            else if ($authUserInfo->user_type == 'professor' or 
                     $authUserInfo->user_type == 'lecturer' or 
                     $authUserInfo->user_type == 'dean' or 
                     $authUserInfo->user_type == 'head') {
                $getSessionUserEmail = Session('loggedUserEmail');
                $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                $data = json_decode($send_data);
                return view('Department.home',compact('data'));
            }

            else{
                $getSessionUserEmail = Session('loggedUserEmail');
                $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                $data = json_decode($send_data);
                return view('Employee.home',compact('data'));
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
