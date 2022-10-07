<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Login;
use App\Models\Student;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Termwind\Components\Dd;

class RecuiterController extends Controller
{

    public function send_add_student_data(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:students',
            'password' => 'required|min:5|max:8',
            's_phone' => 'required|max:11',
        ]);
        $recuit_student = new Student();
        $login = new Login();
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


        // Inserting into login tabe
        $login->email = $recuit_student->email;
        $login->phone = $recuit_student->s_phone;
        $login->password = $recuit_student->password;
        $login->user_type = $recuit_student->user_type;
        $login->save();
        return back()->with('success', 'Students added successfully and Student id is' . ' ' . $dept_id);
        // function find_id(Request $request)
        // {
        // $get_id = DB::table('students')->select->count()->where('dept','=',$request->dept)->where('batch','=',$request->batch)->first();
        // return $get_id[0][0]+1;
        // }
    }

    public function update_Students_info(Request $request)
    {
        $data = DB::table('students')->get();
        return view('Recruiter.update-students-info', compact('data'));
    }

    public function update_Students_info_details($id)
    {
        $studentId = Student::find($id);
        return view('Recruiter.update-students-info-details', compact('studentId'));
    }

    public function send_update_Students_info_details(Request $request, $id)
    {
        $studentId = Student::find($id);
        // $loginId = new Login();
        // $data = request()->except(['_token']);
        // $studentLoginId = DB::table('logins')->select('*')->where('email',$studentId[0]->email)->get();
        
        //  finding email of student
        // dd($studentId->email);
        // $getLoginUserid = $studentId->email;
        // DB::table('logins')->update([
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        // ]);

        // dd(DB::table('logins')->select('*')->where('email',$getLoginUserid))->get();

        // dd($studentLoginId[0]->email);
        // $studentLoginId[0]->email = $request->email;
        // $studentLoginId[0]->phone = $request->s_phone;
        // $studentLoginId[0]->save();
        // $request->session()->put($studentLoginId[0]->email,'=',$request->email,$studentLoginId[0]->phone,'=', $request->s_phone);
        // return back();
        // $request->validate([
        //     'email' => 'required|unique:students',
        //     's_phone' => 'required|max:11',
        // ]);
        // dd($studentLoginId);
        // $loginId->
        $studentId->update($request->all());
        // $studentLoginId->update($request->all());
        // $studentLoginId->update($request->all());
        return redirect()->back()->with('success', 'Student updated successfully');
    }
    public function department_profile(Request $request)
    {
        $getSessionUserEmail = Session('loggedUserEmail');
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        $data = json_decode($send_data);
        return view('Department.profile',compact('data'));
    }
    public function department_home()
    {
        $getSessionUserEmail = Session('loggedUserEmail');
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        $data = json_decode($send_data);
        return view('Department.home',compact('data'));
    }

    public function department_profile_update(){
        $getSessionUserEmail = Session('loggedUserEmail');
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        $data = json_decode($send_data);
        return view('Department.profile-update',compact('data'));
    }

    public function department_profile_update_data(Request $request){
        // $employees_details = new Edetail();
        // $login = new Login();
        // $employees_details->fathersName = $request->has('fathersName') ? $request->get('fathersName') : " ";
        // $employees_details->mothersName = $request->has('mothersName') ? $request->get('mothersName') : " ";
        // $employees_details->nationalID = $request->has('nationalID') ? $request->get('nationalID') : " ";
        // $employees_details->previousJob = $request->has('previousJob') ? $request->get('previousJob') : " ";
        // $employees_details->name = $request->has('name') ? $request->get('name') : " ";
        // $employees_details->email = $request->has('email') ? $request->get('email') : " ";
        // $employees_details->phone = $request->has('phone') ? $request->get('phone') : " ";
        // $employees_details->eDept = $request->has('eDept') ? $request->get('eDept') : " ";
        // $employees_details->education = $request->has('education') ? $request->get('education') : " ";
        // $employees_details->save();

        // // Inserting into Login table
        // $login->email = $employees_details->email;
        // $login->phone = $employees_details->phone;
        // $login->password = $employees_details->password;
        // $login->user_type = $employees_details->post;
        // $login->save();
        // return back()->with('success', "Employee added successfully");
        $getSessionUserEmail = Session('loggedUserEmail');
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        // $data = json_decode($send_data);
        // dd($data[0]->name);

        // $employees_details->name = $request->session()->put('name', $request->input('name'));
        // $employees_details->save();
        // dd($request->session()->get('name'));  
        dd($send_data);

    }

}
