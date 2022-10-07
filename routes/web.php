

<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RecuiterController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router as RoutingRouter;

Route::group(['middleware' => 'prevent-back-history'],function(){     //Start of preventBackHistory middleware
	
/* View Universal Login Page */
Route::get('/',[LoginController::class,'index']);

//   Universal login/Checking Auth user
Route::post('/login',[LoginController::class,'login'])->name('auth.login');



// Public page view route
Route::get('/viewpublicpage',[LoginController::class,'Public_page']);

Route::get('/register/setting',[RegisterController::class,'viewRegisterSetting']);


/* Register routers */

// temp registration of register
Route::get('/viewregister',[MemberController::class,'viewregister']);
Route::post('/register',[MemberController::class,'register']);
Route::get('/register/home',[RegisterController::class,'viewregisterhome']);
//  viewing registration dashboard
// Route::get('/view-register-dashboard',[MemberController::class,'login']);



// View profile page

Route::get('/register/profile',[RegisterController::class,'Profile'])->name('register-profile');

//view student min information  
Route::get('/register/view-students-info',[RegisterController::class,'view_students_info']);
Route::get('/register/view-details-student-info/{id}',[RegisterController::class,'view_details_student_info']);
Route::get('/register/show-details-student-info',[RegisterController::class,'show_details_student_info']);
// Search from Register
Route::get('/register/search',[RegisterController::class,'search_student_info']);
Route::post('/register/search/result',[RegisterController::class,'result_search_student_info']);
// Register dashboard
Route::get('/register/home',[RegisterController::class,'registerDashboard']);
// Add new employees 
Route::get('/register/addemployees',[RegisterController::class,'viewaddEmployees']);
Route::post('/register/sendemployeedata',[RegisterController::class,'addEmployees']);

// View employees from regiater
Route::get('/register/view-employees',[RegisterController::class,'viewemployees']);

//view for update employees info from register
 
Route::get('/register/employees-info/{id}',[RegisterController::class,'view_employees_info']);

// Recruiter routes

Route::get('/recruiter/home',[LoginController::class,'login']);

// Recruiter profile

Route::get('/recruiter/home',[LoginController::class,'recruiter_profile']);

Route::get('/recruiter/add-student',[RecuiterController::class,'add_student']);

Route::get('/recruiter/update-Students-info',[RecuiterController::class,'update_Students_info']);

Route::get('/recruiter/update-Students-info-details/{id}',[RecuiterController::class,'update_Students_info_details']);
Route::post('/recruiter/send-update-Students-info-details/{id}',[RecuiterController::class,'send_update_Students_info_details']);

// Logout
Route::post('/logout',[LoginController::class,'RegisterLogout']);

//add student
Route::post('/recruiter/send_add_student_data', [RecuiterController::class, 'send_add_student_data']);
});  //end of preventBackHistory middleware 

// Department routes

//go to deparment profile page
Route::get('/department/profile',[RecuiterController::class, 'department_profile']);
Route::get('/department/home',[RecuiterController::class, 'department_home']);
// Update profile info
Route::get('/department/profile/update/{id}',[RecuiterController::class, 'department_profile_update']);

Route::post('/department/profile/update/send/{id}',[RecuiterController::class, 'department_profile_update_data']);
