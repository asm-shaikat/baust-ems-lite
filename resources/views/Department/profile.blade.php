@extends('Department.welcome')
@section('title','Home')
@extends('Department.navbar')
@section('content')
   <!-- component -->
<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
    <div class="container mx-auto">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="/images/profile-avatar.jpg"
                            alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$data[0]->name}}</h1>
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">{{@ucfirst($data[0]->post)}}</h3>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">
                                @if($data[0]->active)
                                    Active
                                @else
                                    Inactive
                                @endif
                            </span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member since</span>
                            <span class="ml-auto">{{$data[0]->created_at}}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Full Name</div>
                                <div class="px-4 py-2">{{$data[0]->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Phone</div>
                                <div class="px-4 py-2">{{$data[0]->phone}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Father's Name</div>
                                <div class="px-4 py-2">{{$data[0]->fathersName}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Mother's Name</div>
                                <div class="px-4 py-2">{{$data[0]->mothersName}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Department</div>
                                <div class="px-4 py-2">{{$data[0]->eDept}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">National ID</div>
                                <div class="px-4 py-2">{{$data[0]->nationalID}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:{{$data[0]->email}}">{{$data[0]->email}}</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">
                            @if ($data[0]->previousJob != "")
                                @foreach(explode(',', $data[0]->previousJob) as $info) 
                                    <li><div class="text-teal-600">{{$info}} </div></li>
                                @endforeach
                            @endif     
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Education</span>
                            </div>
                            <ul class="list-inside space-y-2">
                            @if ($data[0]->education != "")
                                @foreach(explode(',', $data[0]->education) as $info) 
                                    <li><div class="text-teal-600">{{$info}} </div></li>
                                @endforeach
                            @endif
                            </ul>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>

@endsection