<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Login;
use App\Models\Result;
use App\Models\Sessional;
use App\Models\Student;
use App\Models\Theory;
use App\Models\User;
use Illuminate\Auth\Events\Login as EventsLogin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Spatie\Backtrace\Backtrace;
use Symfony\Component\Console\Input\Input;
use Termwind\Components\Dd;

class RecuiterController extends Controller
{

    public function recuiter_dashboard(){
        $fourones = DB::table('students')->select('*')->where('level', 4)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
        $fourtwos = DB::table('students')->select('*')->where('level', 4)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
        $threetwos = DB::table('students')->select('*')->where('level', 3)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
        $threeones = DB::table('students')->select('*')->where('level', 3)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
        $twotwos = DB::table('students')->select('*')->where('level', 2)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
        $twoones = DB::table('students')->select('*')->where('level', 2)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
        $onetwos = DB::table('students')->select('*')->where('level', 1)->where('term', 2)->orderBy('dept_id', 'DESC')->paginate(5);
        $oneones = DB::table('students')->select('*')->where('level', 1)->where('term', 1)->orderBy('dept_id', 'DESC')->paginate(5);
        
        return view('Recruiter.dashboard',compact('fourtwos','fourones','threetwos','threeones','twotwos','twoones','onetwos','oneones'));
    }

    public function add_student(){
        return view('Recruiter.add-student');
    }


    public function recuiter_profile(){
        $getSessionUserEmail = Auth::User()->email;
        $send_data = DB::table('edetails')->select("*")->where('email',$getSessionUserEmail)->get();
        $data = json_decode($send_data);
        return view('Recruiter.profile',compact('data'));
    }

    public function send_add_student_data(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:students',
            'password' => 'required',
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
            'password' =>  $recuit_student->password,
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

        public function result_publish(Request $request){
            if(Auth::check()){
            $getSessionUserEmail =  Auth::User()->email;
            $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
            $data = json_decode($send_data);
            $result_theory = new Theory();
            $result_sessional = new Sessional();
            $course_type = $request->has('course_type') ? $request->get('course_type') : "";
            if($course_type == 'Theory'){
                $result_theory->id = $request->has('id') ? $request->get('id') : "";
                $result_theory->name = $request->has('name') ? $request->get('name') : "";
                $result_theory->level_term = $request->has('level_term') ? $request->get('level_term') : "";
                $result_theory->course_type  = $request->has('course_type') ? $request->get('course_type'):"";
                $result_theory->course = $request->get('course').'-'.$request->get('course_number');
                $result_theory->course_mid = $request->get('course').'-'.$request->get('course_number-mid');
                $result_theory->course_ct = $request->get('course').'-'.$request->get('course_number-ct');
                $result_theory->course_assignment = $request->get('course').'-'.$request->get('course_number-assignment');
                $result_theory->course_attendence = $request->get('course').'-'.$request->get('course_number-attendence');

                $result_theory->course1 = $request->get('course1').'-'.$request->get('course1_number');
                $result_theory->course1_mid = $request->get('course1').'-'.$request->get('course1_number-mid');
                $result_theory->course1_ct = $request->get('course1').'-'.$request->get('course1_number-ct');
                $result_theory->course1_assignment = $request->get('course1').'-'.$request->get('course1_number-assignment');
                $result_theory->course1_attendence = $request->get('course1').'-'.$request->get('course1_number-attendence');

                $result_theory->course2 = $request->get('course2').'-'.$request->get('course2_number');
                $result_theory->course2_mid = $request->get('course2').'-'.$request->get('course2_number-mid');
                $result_theory->course2_ct = $request->get('course2').'-'.$request->get('course2_number-ct');
                $result_theory->course2_assignment = $request->get('course2').'-'.$request->get('course2_number-assignment');
                $result_theory->course2_attendence = $request->get('course2').'-'.$request->get('course2_number-attendence');

                $result_theory->course3 = $request->get('course3').'-'.$request->get('course3_number');
                $result_theory->course3_mid = $request->get('course3').'-'.$request->get('course3_number-mid');
                $result_theory->course3_ct = $request->get('course3').'-'.$request->get('course3_number-ct');
                $result_theory->course3_assignment = $request->get('course3').'-'.$request->get('course3_number-assignment');
                $result_theory->course3_attendence = $request->get('course3').'-'.$request->get('course3_number-attendence');

                $result_theory->course4 = $request->get('course4').'-'.$request->get('course4_number');
                $result_theory->course4_mid = $request->get('course4').'-'.$request->get('course4_number-mid');
                $result_theory->course4_ct = $request->get('course4').'-'.$request->get('course4_number-ct');
                $result_theory->course4_assignment = $request->get('course4').'-'.$request->get('course4_number-assignment');
                $result_theory->course4_attendence = $request->get('course4').'-'.$request->get('course4_number-attendence');

                $result_theory->save();
                return back();
            }else{
                $result_sessional->id = $request->has('id') ? $request->get('id') : "";
                $result_sessional->name = $request->has('name') ? $request->get('name') : "";
                $result_sessional->level_term = $request->has('level_term') ? $request->get('level_term') : "";
                $result_sessional->course_type  = $request->has('course_type') ? $request->get('course_type'):"";
                $result_sessional->sessional = $request->get('course').'-'.$request->get('course_number');
                $result_sessional->sessional1 = $request->get('course1').'-'.$request->get('course1_number');
                $result_sessional->sessional2 = $request->get('course2').'-'.$request->get('course2_number');
                $result_sessional->sessional3 = $request->get('course3').'-'.$request->get('course3_number');
                $result_sessional->sessional4 = $request->get('course4').'-'.$request->get('course4_number');
                $result_sessional->save();
                return back();
            }
                return view('Department.result',compact('data'));
            }else{
                return redirect('/');
            }
        }

        public function result_publish_view(Request $request){
            if(Auth::check()){
                $getSessionUserEmail =  Auth::User()->email;
                $send_data = DB::table('edetails')->select("*")->where('email', $getSessionUserEmail)->get();
                $data = json_decode($send_data);
                return view('Department.result',compact('data'));
            }else{
                return redirect('/');
            }
        }

    public function show_student_result()
    {
        if (Auth::check()) {
            $getSessionUserEmail =  Auth::User()->email;
            $getStudentTableId = DB::table('students')->select("dept_id")->where('email',$getSessionUserEmail)->get();
            // dd($getStudentTableId);
            $getTheoryData = DB::table('theories')->select("*")->where('id', $getStudentTableId[0]->dept_id)->get();
            $getSessionalData = DB::table('sessionals')->select("*")->where('id', $getStudentTableId[0]->dept_id)->get();
            $getTheoryData = json_decode($getTheoryData);
            $getSessionalData = json_decode($getSessionalData);
            $send_data1 = DB::table('users')->select("*")->where('email', $getSessionUserEmail)->get();
            $data1 = json_decode($send_data1);
            return view('Student.result', compact('data1','getTheoryData','getSessionalData'));
        }
    }

    public function student_profile(Request $request)
    {
    if (Auth::check()) {
        $getSessionUserEmail =  Auth::User()->email;
        $send_data = DB::table('students')->select("*")->where('email', $getSessionUserEmail)->get();
        $send_data1 = DB::table('users')->select("*")->where('email', $getSessionUserEmail)->get();
        $data = json_decode($send_data);
        $data1 = json_decode($send_data1);
        return view('Student.profile', compact('data', 'data1'));
    }
        else{
            return redirect('/');
        }
    }

}
