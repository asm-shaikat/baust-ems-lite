<!-- Extending Welcome.blade.php -->
@extends('welcome')

<!-- Navbar -->
@include('Register.navbar')

<!-- Showing title name dynamically -->
@section('title','Profile')
<div align="center">
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
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="bg-gray-100 pb-20">
    <div class="w-full text-white bg-main-color">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="/register/profile" class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">
                    Profile</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-blue-800 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-blue-800 focus:outline-none focus:shadow-outline">
                        <span>{{ $data[0]->name }}</span>
                        <img class="inline h-6 rounded-full" src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4">
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="py-2 bg-white text-blue-800 text-sm rounded-sm border border-main-color shadow-sm">
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/register/setting">Settings</a>
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Help</a>
                            <div class="border-b"></div>
                            <form action="{{ url('/logout') }}" method="post">
                                @csrf
                                <button type="submit">
                                    <li><a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline">Logout</a></li>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End of Navbar -->

    <div class="container mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-green-400">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto" src="/images/profile-avatar.jpg" alt="">
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">{{ $data[0]->name }}</h1>
                    <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Joining Date</span>
                            <span class="ml-auto">{{ $data[0]->joiningDate }}</span>
                        </li>
                    </ul>
                </div>
                <!-- End of profile card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Full Name</div>
                                <div class="px-4 py-2">{{ $data[0]->name }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Post</div>
                                <div class="px-4 py-2">{{ $data[0]->post }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Contact No.</div>
                                <div class="px-4 py-2">{{ $data[0]->phone }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="mailto:jane@example.com">
                                        {{ $data[0]->email }}
                                    </a>
                                </div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Father's Name</div>
                                <div class="px-4 py-2">{{ $data[0]->fathersName }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Mother's Name</div>
                                <div class="px-4 py-2">{{ $data[0]->mothersName }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">National Id</div>
                                <div class="px-4 py-2">{{ $data[0]->nationalID }}</div>
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Blood Group</div>
                                <div class="px-4 py-2">{{ $data[0]->bloodGrp }}</div>
                            </div>
                        </div>
                    </div>
                    <button class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Show
                        Full Information</button>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">

                    <div class="grid grid-cols-2 ">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">{{ $data[0]->previousJob }}</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Education</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">{{ $data[0]->education }}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>
</div>
@endsection
</div>