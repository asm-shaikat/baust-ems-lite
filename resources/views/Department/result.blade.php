@extends('Department.welcome')
@section('title','Result Publishing')
@extends('Department.navbar')
@section('content')
<!-- component -->

<div class="font-mono  w-full">
    <div class=" ">
        <form action="{{ url('/department/result-publish') }}" method="post">
            @csrf
            <p class="pt-4 text-2xl ml-64 dark:text-white ">Create an Account!</p>
           
                <div class="">
                    <div class="flex">
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
                    <div class="mt-7">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="email" id="levelTerm" name="level_term">
                            <option selected>Select Level & Term</option>
                        </select>

                    </div>

                    <div class="mt-7">
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="email" id="courseType" name="course_type">
                            <option selected>Select Course Type</option>
                        </select>

                    </div>
</div></div>
                    <div class="flex">
                    <!-- first colum -->
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Course-1
                        </label>
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="password" id="course" name="course">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Final Exam Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Mid Term Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number-mid" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            CT Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number-ct" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Assignment Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number-assignment" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Attendence Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number-attendence" />
                    </div>
                </div>

                <!-- Second colum -->
                <div class="flex">
                
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Course-2
                        </label>
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="password" id="course1" name="course1">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Final Exam Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number1" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Mid Term Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number1-mid" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            CT Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number1-ct" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Assignment Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number1-assignment" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Attendence Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number1-attendence" />
                    </div>
                </div>
                <!-- Third column -->
                <div class="flex">
                   
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Course-3
                        </label>
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="password" id="course2" name="course2">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Final Exam Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number2" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Mid Term Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number2-mid" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            CT Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number2-ct" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Assignment Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number2-assignment" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Attendence Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number2-attendence" />
                    </div>

                </div>
                <!-- Forth column -->
                <div class="flex">
                   
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Course-4
                        </label>
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="password" id="course2" name="course3">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Final Exam Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number3" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Mid Term Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number3-mid" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            CT Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number3-ct" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Assignment Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number3-assignment" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Attendence Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number3-attendence" />
                    </div>

                </div>
                <!-- fifth column -->
                <div class="flex">
                   
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Course-5
                        </label>
                        <select class="select select-bordered w-full max-w-xs dark:text-white" for="password" id="course4" name="course4">
                            <option selected>Select Course</option>
                        </select>
                    </div>

                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Final Exam Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number4" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Mid Term Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number4-mid" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            CT Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number4-ct" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Assignment Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number4-assignment" />
                    </div>
                    <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="email">
                            Attendence Mark
                        </label>
                        <input class="input input-bordered w-full max-w-xs dark:text-white" type="text" placeholder="Enter number " name="course_number4-attendence" />
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