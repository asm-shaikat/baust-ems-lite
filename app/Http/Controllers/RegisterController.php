<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Employee;
use App\Models\Login;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    public function viewaddEmployees()
    {
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
        $login = new Login();
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
        $login->email = $employees_details->email;
        $login->phone = $employees_details->phone;
        $login->password = $employees_details->password;
        $login->user_type = $employees_details->post;
        $login->save();
        return back()->with('success', "Employee added successfully");
    }
    public function registerProfile()
    {
        return view('Register.profile');
    }

    public function viewRegisterSetting()
    {
        return view('Register.setting');
    }
    public function view_students_info()
    {
        $studentInfo = Student::all();
        // dd($studentInfo);
        return view('Register.students-info', compact('studentInfo'));
    }
    public function view_details_student_info($id)
    {
        $data = DB::table('students')->where('id', $id)->get();
        return view('Register.students-info-details', compact('data'));
    }
    public function viewregisterhome()
    {
        return view('Register.home');
    }

    public function search_student_info()
    {
        $searchResult = Student::all();
        return view('Register.search', compact('searchResult'));
    }

    public function result_search_student_info(Request $request)
    {
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
    public function registerDashboard(Request $request)
    {
        $countCurrentStudent = DB::table('students')->where('active', 1)->count();
        $countPassStudent = DB::table('students')->where('active', 0)->count();
        return view('Register.home', compact('countCurrentStudent', 'countPassStudent'));
    }
}
