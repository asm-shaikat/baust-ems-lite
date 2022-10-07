<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Employee;
use App\Models\Login;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller{
    public function viewaddEmployees(){
        return view('Register.add-employee');
    }
    public function addEmployees(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:edetails',
            'password' => 'required|min:5|max:8',
            'fathersName' => 'required',
            'mothersName' => 'required',
            'nationalID' => 'required',
            'bloodGrp' => 'required',
            'joiningDate' => 'required',
            'nationalID' => 'required',
            'nationalID' => 'required|max:16|min:10',
            'phone' => 'required|max:11',
            'post' => 'required',
            'eDept' => 'required',
            'education' => 'required',
        ]);
        $employees_details = new Edetail();
        $users = new User();
        $employees_details->fathersName = $request->has('fathersName') ? $request->get('fathersName') : " ";
        $employees_details->mothersName = $request->has('mothersName') ? $request->get('mothersName') : " ";
        $employees_details->nationalID = $request->has('nationalID') ? $request->get('nationalID') : " ";
        $employees_details->bloodGrp = $request->has('bloodGrp') ? $request->get('bloodGrp') : " ";
        $employees_details->previousJob = $request->has('previousJob') ? $request->get('previousJob') : " ";
        $employees_details->joiningDate = $request->has('joiningDate') ? $request->get('joiningDate') : " ";
        $employees_details->leavingDate = $request->has('leavingDate') ? $request->get('leavingDate') : " ";
        $employees_details->name = $request->has('name') ? $request->get('name') : " ";
        $employees_details->email = $request->has('email') ? $request->get('email') : " ";
        $employees_details->phone = $request->has('phone') ? $request->get('phone') : " ";
        $employees_details->post = $request->has('post') ? $request->get('post') : " ";
        $employees_details->eDept = $request->has('eDept') ? $request->get('eDept') : " ";
        $employees_details->education = $request->has('education') ? $request->get('education') : " ";
        $employees_details->password = Hash::make($request->has('password') ? $request->get('password') : " ");
        $employees_details->save();

        // Inserting into Login table
        $users->name = $employees_details->name;
        $users->email = $employees_details->email;
        $users->password = $employees_details->password;
        $users->user_type = $employees_details->post;
        $users->save();
        return back()->with('success', "Employee added successfully");
    }

    public function viewemployees(){
        $data = DB::table('edetails')->get();
        return view('Register.view-employees',compact('data'));
    }
    
    public function view_employees_info($id){
        $employeeId = DB::table('edetails')->where('id', $id)->get();
        return view('Register.view-employees-details',compact('employeeId'));
    }

    public function registerProfile()
    {
        return view('Register.profile');
    }

    public function viewRegisterSetting()
    {
        return view('Register.setting');
    }
    public function view_students_info(){
        if (Auth::check()){
            $studentInfo = Student::all();
            return view('Register.students-info', compact('studentInfo'));
        }
        else{
            return redirect('/');
        }

    

    }
    public function view_details_student_info($id)
    {
        $data = DB::table('students')->where('id', $id)->get();
        return view('Register.students-info-details', compact('data'));
    }
//     public function viewregisterhome()
//     {
//         if(Auth::check()){
//         return view('Register.home');
//         }
//         else{
//             return redirect('/');
//         }
//     }

    public function search_student_info(){
            if (Auth::check()){
        $searchResult = Student::all();
        return view('Register.search', compact('searchResult'));
            }
    }

    public function result_search_student_info(Request $request){
        if (Auth::check()){
        $searchKey = $request->has('search') ? $request->get('search') : "";
        $searchResult = DB::table('students')
            ->where('concatanate', 'LIKE', '%' . $searchKey . '%')
            ->get();
        if (count($searchResult) >= 1) {
            return view('Register.search', compact('searchResult'));
        } else {
            return back()->with('failed', 'No search results found');
        }
    }
    }
    public function registerDashboard(Request $request){
        if(Auth::check()){
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

    }

    public function Profile(Request $request){
        $getSessionUserEmail = Auth::User()->email;
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        $data = json_decode($send_data);
        return view('profile',compact('data'));
    }
}
