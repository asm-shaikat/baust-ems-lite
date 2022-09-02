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
Route::get('/view-register-dashboard',[MemberController::class,'login']);


// Add employees from register
Route::post('/sendemployeedata',[RegisterController::class,'addEmployees']);

// View profile page

Route::get('/profile',[LoginController::class,'Profile'])->name('register-profile');

// Add new employees 
Route::get('/addemployees',[RegisterController::class,'viewaddEmployees']);
Route::post('/sendemployeedata',[RegisterController::class,'addEmployees']);

// Logout
Route::post('/logout',[LoginController::class,'logout']);

});  //end of preventBackHistory middleware 
