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
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View as ViewView;

class LoginController extends Controller{
    
    //for login page view
    public function index(){
        return view('universal-login');
    }

    // Checking auth use
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($request->only('email','password'))){
            $LoginUserData = Auth::User();
            
            // If user is a register
            if($LoginUserData->user_type=='register'){
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
            else if ($LoginUserData->user_type == 'recruiter') {
                $getSessionUserEmail = $LoginUserData->email;
                $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                $data = json_decode($send_data);

                // query for all semesters students data
                $fourones = DB::table('students')->select('*')->where('level', 4)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
                $fourtwos = DB::table('students')->select('*')->where('level', 4)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
                $threetwos = DB::table('students')->select('*')->where('level', 3)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
                $threeones = DB::table('students')->select('*')->where('level', 3)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
                $twotwos = DB::table('students')->select('*')->where('level', 2)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
                $twoones = DB::table('students')->select('*')->where('level', 2)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
                $onetwos = DB::table('students')->select('*')->where('level', 1)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
                $oneones = DB::table('students')->select('*')->where('level', 1)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);

                return view('Recruiter.dashboard', compact('data', 'fourtwos', 'fourones', 'threetwos', 'threeones', 'twotwos', 'twoones', 'onetwos', 'oneones'));
            }

            else if ($LoginUserData->user_type == 'professor') {
                if (Auth::check()) {
                    $getSessionUserEmail =  Auth::User()->email;
                    $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                    $data = json_decode($send_data);
                    $send_data1 = DB::table('users')->select("*")->where('email', $getSessionUserEmail)->get();
                    $data1 = json_decode($send_data1);
                    return view('Department.home', compact('data', 'data1'));
                }
            }

            else if($LoginUserData->user_type == 'student'){
                $getSessionUserEmail =  Auth::User()->email;
                // $send_data = DB::table('students')->select("*")->where('email',$getSessionUserEmail)->get();
            //     // // $data = json_decode($send_data);
                $send_data1 = DB::table('users')->select("*")->where('email',$getSessionUserEmail)->get();
                $data1 = json_decode($send_data1);
                
                return view('Student.home',compact('data1'));
            }



        } 
        else{
            return back()->with('loginfailed','Invalid credentials');
        }
                 
      
}



    // Logout Register
    public function RegisterLogout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // for public page view

    public function Public_page(){
        return view('Public.publicpage');
    }
    
    
}
