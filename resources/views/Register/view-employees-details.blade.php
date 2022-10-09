@extends('welcome')
<!-- Title -->
@section('title','Employees Details')
<!-- Navbar -->
@include('Register.navbar')
@section('content')
<!-- Card is full width. Use in 8 col grid for best view. -->
<!-- Card code block start -->
<div class="-mt-16">
    <div class="shadow rounded xl:flex lg:flex w-full p-4">
        <div class="xl:w-2/5 lg:w-2/5 bg-gray-100 dark:bg-gray-800 py-8 border-gray-300 dark:border-gray-200 xl:border-r rounded-tl xl:rounded-bl rounded-tr xl:rounded-tr-none lg:border-r-2 border-b xl:border-b-0 flex justify-center items-center">
            <div class="flex flex-col items-center">
                <div class="h-24 w-24 rounded-full mb-3">
                    <img tabindex="0" class="focus:outline-none h-full w-full object-cover rounded-full shadow" src="https://dh-ui.s3.amazonaws.com/assets/photo-1570211776045-af3a51026f4a.jfif" alt="boy avatar" />
                </div>
                <p tabindex="0" class="focus:outline-none mb-2 text-lg font-bold text-gray-900 dark:text-gray-100">{{ $employeeId[0]->name}}</p>
                <p tabindex="0" class="focus:outline-none mb-6 text-sm dark:text-white">{{ $employeeId[0]->email}}</p>
            </div>
        </div>
        <div class="xl:w-3/5 lg:w-3/5 px-6 py-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm font-medium">Father's Name</p>
                        <p tabindex="0" class="focus:outline-none text-sm">{{ $employeeId[0]->fathersName}}</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3 text-white">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Mother's Name</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->mothersName}}</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Post</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ @ucfirst($employeeId[0]->post)}}</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Department</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->eDept}}</p>
                    </div>
                </div>
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">National ID</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->nationalID}}</p>
                    </div>
                </div>
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Blood Group</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->bloodGrp}}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-between">
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Previous Job</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->previousJob}}</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Joining Date</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->joiningDate}}</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Leaving Date</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->leavingDate}}</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Phone Number</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">{{ $employeeId[0]->phone}}</p>
                    </div>
                </div>
                
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Status</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">@if($employeeId[0]->active){{"Active"}}@else{{"Inactive"}}@endif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection