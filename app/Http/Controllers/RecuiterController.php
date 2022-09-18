<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RecuiterController extends Controller
{
    public function send_add_student_data(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:students',
            'password' => 'required|min:5',
            's_phone' => 'required|max:11',
        ]);
        $recuit_student = new Student();
        $login = new Login();
        $recuit_student->name = $request->has('name') ? $request->get('name') :"";
        $recuit_student->f_name = $request->has('f_name') ? $request->get('f_name') :"";
        $recuit_student->f_phone = $request->has('f_phone') ? $request->get('f_phone') :"";
        $recuit_student->m_name = $request->has('m_name') ? $request->get('m_name') :"";
        $recuit_student->m_phone = $request->has('m_phone') ? $request->get('m_phone') :"";
        $recuit_student->b_date = $request->has('b_date') ? $request->get('b_date') :"";
        $recuit_student->b_id = $request->has('b_id') ? $request->get('b_id') :"";
        $recuit_student->religion = $request->has('religion') ? $request->get('religion') :"";
        $recuit_student->gender = $request->has('gender') ? $request->get('gender') :"";
        $recuit_student->blood = $request->has('blood') ? $request->get('blood') :"";
        $recuit_student->s_phone = $request->has('s_phone') ? $request->get('s_phone') :"";
        $recuit_student->permanent_address = $request->has('permanent_address') ? $request->get('permanent_address') :"";
        $recuit_student->present_address = $request->has('present_address') ? $request->get('present_address') :"";
        $recuit_student->email = $request->has('email') ? $request->get('email') :"";
        $recuit_student->password = Hash::make($request->has('password') ? $request->get('password') : " ");       
        $recuit_student->user_type = "student";
        $recuit_student->save();
        

        // Inserting into login tabe
        $login->email = $recuit_student->email;
        $login->phone = $recuit_student->s_phone;
        $login->password = $recuit_student->password;
        $login->user_type = $recuit_student->user_type;
        $login->save();
        return back()->with('success', 'Students added successfully');
    }
}
