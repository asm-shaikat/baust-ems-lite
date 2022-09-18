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
   <form class="w-full max-w-xl bg-white rounded-lg shadow-md p-6" action="{{ url('/recruiter/send_add_student_data') }}" method="post" enctype="multipart/form">
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Full_name'>Full name</label>
            <input type='text' name="name" placeholder="Student Full Name" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" required>
            
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Father_name'>Fathers Name</label>
            <input name="f_name" placeholder="Father's Full Name" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Father_phone'>Father's Phone Number</label>
            <input name="f_phone" placeholder="0172345678" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text' required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Mother_name'>Mothers Name</label>
            <input name="m_name" placeholder="Mother's Full Name" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Mother_phone'>Mother's Phone Number</label>
            <input name="m_phone" placeholder="0172345678" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='tel' required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Birth_date'>Birth date</label>
            <input name="b_date" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='date'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Birth_Certificate_ID'>Birth_Certificate_ID</label>
            <input name="b_id" placeholder="birth-Certificate-Number" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='number'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Religion'>Religion</label>
            <input name="religion" placeholder="Religion" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Gender'>Gender</label>
            <select class="form-select" name="gender" aria-label="Default select example">
               <option selected>Gender</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
               <option value="Other">Other</option>
            </select>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Blood_Group'>Blood Group</label>
            <select class="form-select" name="blood" aria-label="Default select example">
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
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Student_mobile'>Student's Phone Number</label>
            <input name="s_phone" placeholder="0172345678" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='tel' required>
            <small class="text-red-700">@error('s_phone') {{$message}}  @enderror</small>

         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Parmanent_address'>Permanent Address</label>
            <input name="permanent_address" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Present_address'>Present address</label>
            <input name="present_address" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='text'  required>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Email'>Email address</label>
            <input type='email' name="email" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" required>
            <small class="text-red-700">@error('email') {{$message}}  @enderror</small>
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for='Password'>Password</label>
            <input name="password" class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none" type='password' required>
            <small class="text-red-700">@error('password') {{$message}}  @enderror</small>
         </div>
         <div class="w-full flex items-center justify-between px-3 mb-3 ">
          
         </div>
         <div class="w-full md:w-full px-3 mb-6">
            <input type="submit" class="appearance-none block w-full bg-blue-600 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-blue-500 focus:outline-none focus:bg-white focus:border-gray-500" />
         </div>
         
      </div>
   </form>
</div>
@endsection