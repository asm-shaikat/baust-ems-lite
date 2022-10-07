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
                <p tabindex="0" class="focus:outline-none mb-6 text-sm ">{{ $employeeId[0]->email}}</p>
            </div>
        </div>
        <div class="xl:w-3/5 lg:w-3/5 px-6 py-8">
            <div class="flex flex-wrap justify-between">
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm font-medium">Birthday</p>
                        <p tabindex="0" class="focus:outline-none text-sm">29 Jan, 1982</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3 text-white">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Gender</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">Male</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Location</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">California, USA</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Phone Number</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">202-555-0191</p>
                    </div>
                </div>
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Last Login</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">Today</p>
                    </div>
                </div>
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Status</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">Approved</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-between">
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Birthday</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">29 Jan, 1982</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Gender</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">Male</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Location</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">California, USA</p>
                    </div>
                </div>
                <div class="w-2/5 mb-8 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Phone Number</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">202-555-0191</p>
                    </div>
                </div>
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="text-white focus:outline-none mb-2 text-sm  font-medium">Last Login</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">Today</p>
                    </div>
                </div>
                <div class="w-2/5 text-white">
                    <div class="border-b pb-3">
                        <p tabindex="0" class="focus:outline-none mb-2 text-sm  font-medium">Status</p>
                        <p tabindex="0" class="focus:outline-none text-sm ">Approved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection