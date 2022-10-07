<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Login;
use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Termwind\Components\Dd;

class RecuiterController extends Controller
{

    public function add_student()
    {
        return view('Recruiter.add-student');
    }

    public function send_add_student_data(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:students',
            'password' => 'required|min:5|max:8',
            's_phone' => 'required|max:11',
        ]);
        $recuit_student = new Student();
        $users = new User();
        $recuit_student->name = $request->has('name') ? $request->get('name') : "";
        $dept = $request->has('dept') ? $request->get('dept') : "";
        $recuit_student->dept = $dept;
        $recuit_student->batch = $request->has('batch') ? $request->get('batch') : "";
        $recuit_student->level = $request->has('level') ? $request->get('level') : "";
        $recuit_student->term = $request->has('term') ? $request->get('term') : "";
        $d_id = $request->has('d_id') ? $request->get('d_id') : "";
        $dept_id = "";
        if ($d_id != "") {
            $dept_id = $d_id;
        } else {
            $year = $request->has('year') ? $request->get('year') : "";
            $semester = $request->has('semester') ? $request->get('semester') : "";
            $get_id = DB::table('students')->where('dept', '=', $request->dept)->where('batch', '=', $request->batch)->count();
            $newid = $get_id + 1;

            $dept_code = "01";
            if ($dept == "CSE") {
                $dept_code = "01";
            } else if ($dept == "EEE") {
                $dept_code = "02";
            } else if ($dept == "ME") {
                $dept_code = "03";
            } else if ($dept == "CE") {
                $dept_code = "04";
            } else if ($dept == "IPE") {
                $dept_code = "05";
            } else if ($dept == "BBA") {
                $dept_code = "06";
            } else if ($dept == "ENGLISH") {
                $dept_code = "07";
            } else {
                $dept_code = "08";
            }
            $dept_id = $year . $semester . $dept_code . str_pad($newid, 3, '0', STR_PAD_LEFT);
        }
        $recuit_student->dept_id = $dept_id;
        $recuit_student->f_name = $request->has('f_name') ? $request->get('f_name') : "";
        $recuit_student->f_phone = $request->has('f_phone') ? $request->get('f_phone') : "";
        $recuit_student->m_name = $request->has('m_name') ? $request->get('m_name') : "";
        $recuit_student->m_phone = $request->has('m_phone') ? $request->get('m_phone') : "";
        $recuit_student->b_date = $request->has('b_date') ? $request->get('b_date') : "";
        $recuit_student->b_id = $request->has('b_id') ? $request->get('b_id') : "";
        $recuit_student->religion = $request->has('religion') ? $request->get('religion') : "";
        $recuit_student->gender = $request->has('gender') ? $request->get('gender') : "";
        $recuit_student->blood = $request->has('blood') ? $request->get('blood') : "";
        $recuit_student->s_phone = $request->has('s_phone') ? $request->get('s_phone') : "";
        $recuit_student->permanent_address = $request->has('permanent_address') ? $request->get('permanent_address') : "";
        $recuit_student->present_address = $request->has('present_address') ? $request->get('present_address') : "";
        $recuit_student->email = $request->has('email') ? $request->get('email') : "";
        $recuit_student->password = Hash::make($request->has('password') ? $request->get('password') : " ");
        $recuit_student->user_type = "student";
        $recuit_student->active = $request->has('active') ? $request->get('active') : "";
        $recuit_student->concatanate = $request->get('d_id') . $request->get('name') . $request->get('email') . $request->get('dept') . $request->get('s_phone') . $request->get('blood');
        $recuit_student->save();

        // Insering into User table
        User::insert([
            'name' => $recuit_student->name,
            'email' => $recuit_student->email,
            'password' =>   Hash::make($recuit_student->password),
            'user_type' => $recuit_student->user_type,
        ]);
        return back()->with('success', 'Students added successfully and Student id is' . ' ' . $dept_id);
    }

    public function update_Students_info(Request $request)
    {
        if (Auth::check() && Auth::User()->user_type == 'recruiter') {
            $data = DB::table('students')->get();
            return view('Recruiter.update-students-info', compact('data'));
        } else {
            return redirect('/');
        }
    }

    public function update_Students_info_details($id)
    {
        if (Auth::check() && Auth::User()->user_type == 'recruiter') {
            $studentId = Student::find($id);
            return view('Recruiter.update-students-info-details', compact('studentId'));
        } else {
            return redirect('/');
        }
    }

        public function send_update_Students_info_details(Request $request, $id)
        {
            $studentId = Student::find($id);
            $LoginUser = new User();
            // $findEmailForStudent = DB::table('users')->select('email')->where('email','=',$studentId->email)->get();
            $studentId->update($request->all());
            // $findEmailForStudent = $findEmailForStudent[0]->email;
            // DB::table('users')->where('email',$findEmailForStudent)->update(['name',$request->name]);
            return redirect()->back()->with('success', 'Student updated successfully');
        }
        public function department_profile(Request $request)
        {
        if (Auth::check()) {
            $getSessionUserEmail =  Auth::User()->email;
            $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
            $send_data1 = DB::table('users')->select("*")->where('email', $getSessionUserEmail)->get();
            $data = json_decode($send_data);
            $data1 = json_decode($send_data1);
            return view('Department.profile', compact('data', 'data1'));
        }
            else{
                return redirect('/');
            }
        }
        public function department_home()
        {
            if(Auth::check()){
                $getSessionUserEmail =  Auth::User()->email;
                $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
                $data = json_decode($send_data);
                return view('Department.home',compact('data'));    
            }
            else{
                return redirect('/');
            }
        }

        public function department_profile_update(Request $request,$id){
            if(Auth::check()){
            $getSessionUserEmail =  Auth::User()->email;
            $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
            $send_data1 = DB::table('users')->select("*")->where('email',$getSessionUserEmail)->get();
            $data = json_decode($send_data);
            $data1 = json_decode($send_data1);
            return view('Department.profile-update',compact('data','data1'));
            }
        }

        public function department_profile_update_data(Request $request,$id){
            if(Auth::check()){
            $getSessionUserid = User::find($id);
            $getSessionUserEmail =  Auth::User()->email;
            $getSessionUserid->update($request->all());
            $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
            $data = json_decode($send_data);
            $send_data1 = DB::table('users')->select("*")->where('email',$getSessionUserEmail)->get();
            $data1 = json_decode($send_data1);
            return view('Department.profile-update',compact('data','data1'));
        }
        else{
            return redirect('/');
        }

        }

}
