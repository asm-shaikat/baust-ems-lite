<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecuiterController extends Controller
{
    public function send_add_student_data(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone' => 'required|max:11',
        ]);
        

    }
}
