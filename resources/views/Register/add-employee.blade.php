@extends('welcome');
<!-- Title -->
@section('title','Add Employees')

<!-- Navbar -->
@include('Register.navbar');

@section('content')
<p class="text-4xl text-yellow-700 font-extrabold ml-48">ADD EMPLOYEES</p>
            <form action="/sendemployeedata" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-parent flex">
                    <div class="form-1 ">
                        <div class="mb-3 mr-32 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control w-40" id="exampleFormControlInput1" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter full name here" required>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="11 digit phone number" required>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">POST</label>
                            <select class="form-select" name="post" aria-label="Default select example">
                                <option selected>Select a post</option>
                                <option value="dean">Dean</option>
                                <option value="department-head">Department Head</option>
                                <option value="register">Register</option>
                                <option value="examination-controller">Examination Controller</option>
                                <option value="associate-professor">Associate Professor</option>
                                <option value="professor">Professor</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="teching-assistant">Teching Assistant</option>
                                <option value="lab-assistant">Lab Assistant</option>
                            </select>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Employee Department</label>
                            <select class="form-select" name="eDept" aria-label="Default select example">
                                <option selected>Select a department</option>
                                <option value="admission">Admission</option>
                                <option value="Accounts">Accounts</option>
                                <option value="cse">CSE</option>
                                <option value="eee">EEE</option>
                                <option value="me">ME</option>
                                <option value="ce">CE</option>
                                <option value="ip">IP</option>
                                <option value="bba">BBA</option>
                                <option value="english">English</option>
                            </select>
                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Joining Date</label>
                            <input type="date" name="joiningDate" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Joining Date" required>
                        </div>
                        <div class="mb-3 w-96 mr-32">
                            <label for="exampleFormControlInput1" class="form-label">Set password</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="form-2">
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Fathers name</label>
                            <input type="text" name="fathersName" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Father's Name" required>
                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Mothers name</label>
                            <input type="text" name="mothersName" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Mother's Name" required>
                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">National ID</label>
                            <input type="text" name="nationalID" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter National ID" required>
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
                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Previous Job</label>
                            <input type="text" name="previousJob" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Previous Job" required>
                        </div>
                        <div class="mb-3 w-96">
                            <label for="exampleFormControlInput1" class="form-label">Leaving Date</label>
                            <input type="date" name="leavingDate" class="form-control w-40" id="exampleFormControlInput1" placeholder="Enter Leaving Date">
                        </div>

                    </div>
                </div>
                <div class="mb-3 w-full">
                    <label for="exampleFormControlInput1" class="form-label">Education</label>
                    <textarea class="form-control" name="education" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
@endsection