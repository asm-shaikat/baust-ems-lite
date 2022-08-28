<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{
    
    public function addEmployees(Request $request){
        $employees_details = new Edetail();
        $employees_details->fathersName = $request->has('fathersName') ? $request->get('fathersName') : " ";
        $employees_details->mothersName = $request->has('mothersName') ? $request->get('mothersName') : " ";
        $employees_details->nationalID = $request->has('nationalID') ? $request->get('nationalID') : " ";
        $employees_details->bloodGrp = $request->has('bloodGrp') ? $request->get('bloodGrp') : " ";
        $employees_details->previousJob = $request->has('previousJob') ? $request->get('previousJob') : " ";
        $employees_details->joiningDate = $request->has('joiningDate') ? $request->get('joiningDate') : " ";
        $employees_details->leavingDate = $request->has('leavingDate') ? $request->get('leavingDate') : " ";
        $employees_details->name = $request->has('name') ? $request->get('name') :" ";
        $employees_details->email = $request->has('email') ? $request->get('email') :" ";
        $employees_details->phone = $request->has('phone') ? $request->get('phone') :" ";
        $employees_details->post = $request->has('post') ? $request->get('post') :" ";
        $employees_details->eDept = $request->has('eDept') ? $request->get('eDept') :" ";
        $employees_details->education = $request->has('education') ? $request->get('education') :" ";
        $employees_details->password = Hash::make($request->has('password') ? $request->get('password') :" ");
        $employees_details->save();
       
    }
}
