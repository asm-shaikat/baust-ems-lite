@extends('welcome')
<!-- Title -->
@section('title','Add Employees')

<!-- Navbar -->
@include('Register.navbar')

@section('content')
<div class="ml-96 -mt-32 h-auto pb-10">
    @if(Session::get('success'))
    {{ session::get('success') }}
    @endif
    <form action="/register/sendemployeedata" method="post" enctype="multipart/form-data">
                <p class="text-4xl text-yellow-700 font-extrabold ml-52 mt-32 p-10">ADD EMPLOYEES</p>
                @csrf
                <div class="form-parent flex w-70">
                    <div class="form-1 ">
                        <div class="mb-3 mr-32 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control w-40" id="exampleFormControlInput1" placeholder="name@example.com" >
                            <small class="text-red-700">@error('email') {{$message}}  @enderror</small>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter full name here" >
                            <small class="text-red-700">@error('name') {{$message}}  @enderror</small>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="11 digit phone number">
                            <small class="text-red-700">@error('phone') {{$message}}  @enderror</small>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">POST</label>
                            <select class="form-select" name="post" aria-label="Default select example">
                                <option selected>Select a post</option>
                                <option value="dean">Dean</option>
                                <option value="department-head">Department Head</option>
                                <option value="register">Register</option>
                                <option value="examination-controller">Examination Controller</option>
                                <option value="recruiter">Recruiter Officer</option>
                                <option value="Accounts">Accounts</option>
                                <option value="associate-professor">Associate Professor</option>
                                <option value="professor">Professor</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="teching-assistant">Teching Assistant</option>
                                <option value="lab-assistant">Lab Assistant</option>
                            </select>
                            <small class="text-red-700">@error('post') {{$message}}  @enderror</small>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Employee Department</label>
                            <select class="form-select" name="eDept" aria-label="Default select example">
                                <option selected>Select a department</option>
                                <option value="cse">CSE</option>
                                <option value="eee">EEE</option>
                                <option value="me">ME</option>
                                <option value="ce">CE</option>
                                <option value="ip">IP</option>
                                <option value="bba">BBA</option>
                                <option value="english">English</option>
                            </select>
                            <small class="text-red-700">@error('eDept') {{$message}}  @enderror</small>

                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Joining Date</label>
                            <input type="date" name="joiningDate" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Joining Date" >
                            <small class="text-red-700">@error('joiningDate') {{$message}}  @enderror</small>

                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Set password</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password" >
                            <small class="text-red-700">@error('password') {{$message}}  @enderror</small>

                        </div>
                    </div>
                    <div class="form-2">
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Fathers name</label>
                            <input type="text" name="fathersName" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Father's Name" >
                            <small class="text-red-700">@error('fathersName') {{$message}}  @enderror</small>

                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Mothers name</label>
                            <input type="text" name="mothersName" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Mother's Name" >
                            <small class="text-red-700">@error('mothersName') {{$message}}  @enderror</small>

                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">National ID</label>
                            <input type="text" name="nationalID" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter 10-16 digit National ID" >
                            <small class="text-red-700">@error('nationalID') {{$message}}  @enderror</small>

                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Blood Group</label>
                            <select class="form-select" name="bloodGrp" aria-label="Default select example">
                                <option selected>Select a department</option>
                                <option value="O+">O+ve</option>
                                <option value="O-">O-ve</option>
                                <option value="A+">A+ve</option>
                                <option value="A-">A-ve</option>
                                <option value="B+">B+ve</option>
                                <option value="B-">B-ve</option>
                                <option value="AB+">AB+ve</option>
                                <option value="AB-">AB-ve</option>
                            </select>
                            <small class="text-red-700">@error('bloodGrp') {{$message}}  @enderror</small>

                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Previous Job</label>
                            <input type="text" name="previousJob" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Previous Job" >

                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Leaving Date</label>
                            <input type="date" name="leavingDate" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Leaving Date">

                        </div>

                    </div>
                </div>
                <div class="mb-3" style="width: 900px;">
                    <label for="exampleFormControlInput1" class="form-label">Education</label>
                    <textarea class="form-control" name="education" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <small class="text-red-700">@error('education') {{$message}}  @enderror</small>
                </div>
                <button type="submit" class="btn btn-primary mb-10">Submit</button>
            </form>
</div>
@endsection