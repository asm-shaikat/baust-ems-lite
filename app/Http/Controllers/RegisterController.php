<?php

namespace App\Http\Controllers;

use App\Models\Edetail;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{
    
    public function addEmployees(Request $request){
        $employees = new Employee();
        $employees_details = new Edetail();
        $employees_details->fathersName = $request->has('fathersName') ? $request->get('fathersName') : " ";
        $employees_details->mothersName = $request->has('mothersName') ? $request->get('mothersName') : " ";
        $employees_details->nationalID = $request->has('nationalID') ? $request->get('nationalID') : " ";
        $employees_details->bloodGrp = $request->has('bloodGrp') ? $request->get('bloodGrp') : " ";
        $employees_details->previousJob = $request->has('previousJob') ? $request->get('previousJob') : " ";
        $employees_details->joiningDate = $request->has('joiningDate') ? $request->get('joiningDate') : " ";
        $employees_details->leavingDate = $request->has('leavingDate') ? $request->get('leavingDate') : " ";
        $employees_details->save();

        $employees->name = $request->has('name') ? $request->get('name') :" ";
        $employees->email = $request->has('email') ? $request->get('email') :" ";
        $employees->phone = $request->has('phone') ? $request->get('phone') :" ";
        $employees->post = $request->has('post') ? $request->get('post') :" ";
        $employees->eDept = $request->has('eDept') ? $request->get('eDept') :" ";
        $employees->education = $request->has('education') ? $request->get('education') :" ";
        $employees->password = Hash::make($request->has('education') ? $request->get('education') :" ");
        $employees_details->employees()->save($employees);
    }
}
