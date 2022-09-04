<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

 
Route::group(['middleware' => 'prevent-back-history'],function(){     //Start of preventBackHistory middleware
	
/* View Universal Login Page */
Route::get('/',[LoginController::class,'index']);

//   Universal login/Checking Auth user
Route::post('/login',[LoginController::class,'login'])->name('auth.login');



// Public page view route
Route::get('/viewpublicpage',[LoginController::class,'Public_page']);




/* Register routers */

// temp registration of register
Route::get('/viewregister',[MemberController::class,'viewregister']);
Route::post('/register',[MemberController::class,'register']);

//  viewing registration dashboard
// Route::get('/view-register-dashboard',[MemberController::class,'login']);



// View profile page

Route::get('/profile',[LoginController::class,'Profile'])->name('register-profile');

// Add new employees 
Route::get('/register/addemployees',[RegisterController::class,'viewaddEmployees']);
Route::post('/register/sendemployeedata',[RegisterController::class,'addEmployees']);

// Recruiter routes

Route::get('/recruiter/home',[LoginController::class,'login']);


// Logout
Route::post('/logout',[LoginController::class,'logout']);

});  //end of preventBackHistory middleware 
