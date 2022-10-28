@extends('Student.welcome')
@section('title','Profile')
@extends('Student.navbar')
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
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{$data1[0]->name}}</h1>
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
                        <li><button class="btn btn-error text-white"><a href="{{ url('/department/profile/update/'.$data1[0]->id) }}">Update Profile</a></button></li>
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
                                <div class="px-4 py-2">{{$data1[0]->name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Phone</div>
                                <div class="px-4 py-2">{{$data[0]->s_phone}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Father's Name</div>
                                <div class="px-4 py-2">{{$data[0]->f_name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Mother's Name</div>
                                <div class="px-4 py-2">{{$data[0]->m_name}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Department</div>
                                <div class="px-4 py-2">{{$data[0]->dept}}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Birth Date</div>
                                <div class="px-4 py-2">{{$data[0]->b_date}}</div>
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

                
                <!-- End of profile tab -->
            </div>
        </div>
    </div>

@endsection