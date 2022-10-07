@extends('welcome')

@include('navbar')
@section('title','Recruiter')

@section('content')
<!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto">
<!-- component -->
<div class="text-center mt-24">
      <div class="text-sm  text-blue-500"> 
         <h2>Add New Student</h2>
</div>
@if(Session::get('success'))
    {{ session::get('success') }}
    @endif
</div>
<div class="flex justify-center my-2 mx-4 md:mx-0">
   <form class="w-full max-w-xl bg-slate-800  rounded-lg shadow-md p-6" action="{{ url('/recruiter/send_add_student_data') }}" method="post" enctype="multipart/form">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Full_name'>Full name</label>
            <input type='text' name="name" placeholder="Student Full Name" class="input input-bordered w-full dark:text-white" required>
            
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Department'>Department</label>
            <select class="select select-bordered dark:text-white w-full" name="dept" aria-label="Default select example">
               <option selected>Department</option>
               <option value="CSE">CSE</option>
               <option value="EEE">EEE</option>
               <option value="ME">ME</option>
               <option value="CE">CE</option>
               <option value="IPE">IPE</option>
               <option value="ICT">ICT</option>
               <option value="BBA">BBA</option>
               <option value="ENGLISH">ENGLISH</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='batch'>Batch</label>
            <input name="batch" placeholder="Batch" class="input input-bordered w-full dark:text-white" type='number' min=1  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='batch'>Department ID (If have)</label>
            <input name="d_id" placeholder="200101059" class="input input-bordered w-full dark:text-white" type='number' min=150101001>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='level'>Level</label>
            <select class="select select-bordered dark:text-white w-full" name="level" aria-label="Default select example">
               <option selected>Level</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='term'>Term</label>
            <select class="select select-bordered dark:text-white w-full" name="term" aria-label="Default select example">
               <option selected>Term</option>
               <option value="1">1</option>
               <option value="2">2</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='semester'>Semester</label>
            <select class="select select-bordered dark:text-white w-full" name="semester" aria-label="Default select example">
               <option selected>Semester</option>
               <option value="01">Winter</option>
               <option value="02">Summer</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='year'>Year - 20__</label>
            <input name="year" placeholder="Year's last 2 digit" class="input input-bordered w-full dark:text-white" type='number' min='15' required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Father_name'>Fathers Name</label>
            <input name="f_name" placeholder="Father's Full Name" class="input input-bordered w-full dark:text-white" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Father_phone'>Father's Phone Number</label>
            <input name="f_phone" placeholder="0172345678" class="input input-bordered w-full dark:text-white" type='text' required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Mother_name'>Mother's Name</label>
            <input name="m_name" placeholder="Mother's Full Name" class="input input-bordered w-full dark:text-white" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Mother_phone'>Mother's Phone Number</label>
            <input name="m_phone" placeholder="0172345678" class="input input-bordered w-full dark:text-white" type='tel' required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Birth_date'>Birth date</label>
            <input name="b_date" class="input input-bordered w-full dark:text-white" type='date'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Birth_Certificate_ID'>Birth Certificate ID</label>
            <input name="b_id" placeholder="Birth Certificate Number" class="input input-bordered w-full dark:text-white" type='number'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Religion'>Religion</label>
            <input name="religion" placeholder="Religion" class="input input-bordered w-full dark:text-white" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2"  for='Gender'>Gender</label>
            <select class="select select-bordered dark:text-white w-full" name="gender" aria-label="Default select example">
               <option selected>Gender</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
               <option value="Other">Other</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Blood_Group'>Blood Group</label>
            <select class="select select-bordered dark:text-white w-full" name="blood" aria-label="Default select example">
               <option selected>Blood</option>
               <option value="A+">A+</option>
               <option value="A-">A-</option>
               <option value="B+">B+</option>
               <option value="B-">B-</option>
               <option value="AB+">AB+</option>
               <option value="AB-">AB-</option>
               <option value="O+">O+</option>
               <option value="O-">O-</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Student_mobile'>Student's Phone Number</label>
            <input name="s_phone" placeholder="0172345678" class="input input-bordered w-full dark:text-white" type='tel' required>
            <small class="text-red-700">@error('s_phone') {{$message}}  @enderror</small>

         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Parmanent_address'>Permanent Address</label>
            <input name="permanent_address" class="input input-bordered w-full dark:text-white" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Present_address'>Present address</label>
            <input name="present_address" class="input input-bordered w-full dark:text-white" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Email'>Email address</label>
            <input type='email' name="email" class="input input-bordered w-full dark:text-white" required>
            <small class="text-red-700">@error('email') {{$message}}  @enderror</small>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Password'>Password</label>
            <input name="password" class="input input-bordered w-full dark:text-white" type='password' required>
            <small class="text-red-700">@error('password') {{$message}}  @enderror</small>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for='Active'>Active</label>
            <select class="select select-bordered dark:text-white w-full" name="active" aria-label="Default select example">
               <option selected>Active</option>
               <option value="1">Online</option>
               <option value="0">Offline</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <input type="submit" class="appearance-none block w-full bg-blue-600 text-gray-100 font-bold border border-gray-200 rounded-lg py-2 px-3 leading-tight hover:bg-blue-500 focus:outline-none focus:bg-white focus:border-gray-500" />
         </div>
         
      </div>
   </form>
</div>
@endsection