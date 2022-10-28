@extends('Department.welcome')
@section('title','Result Publishing')
@extends('Department.navbar')
@section('content')
<!-- component -->

<div class="font-mono  w-full">
    <div class="ml-52 ">
        <form action="{{ url('/department/result-publish') }}" method="post">
            @csrf
            <p class="pt-4 text-2xl ml-64 dark:text-white ">Create an Account!</p>
            <div class="flex">
                <!-- first colum -->
                <div class="p-4">
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Full Name
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter name" name="name" />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            ID
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter ID" name="id" />
                    </div>
                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="email" id="levelTerm" name="level_term">
                            <option selected>Select Level & Term</option>
                        </select>

                    </div>

                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="email" id="courseType" name="course_type">
                            <option selected>Select Course Type</option>
                        </select>

                    </div>

                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="password" id="course" name="course">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number" />
                    </div>
                </div>
                <!-- Second colum -->
                <div class="p-4 mt-8">
                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" id="course1" name="course1">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course1_number" />
                    </div>

                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" id="course2" name="course2">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course2_number" />
                    </div>

                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" id="course3" name="course3">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course3_number" />

                    </div>
                </div>
                <!-- Third column -->
                <div class="mt-8 p-4">
                    <div class="mb-4">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" id="course4" name="course4">
                            <option selected>Select Course</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course4_number" />
                    </div>
                </div>
            </div>
            <div class="w-4/6 ml-6">
                <button type="submit" class="w-full btn btn-accent">Submit</button>
            </div>
    </div>
    </form>
</div>
</div>
@endsection