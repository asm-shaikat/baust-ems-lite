@extends('Department.welcome')
@section('title','Result Publishing')
@extends('Department.navbar')
@section('content')
<!-- component -->

<body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-full flex">

                <!-- Col -->
                <div class="w-full lg:w-full bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Full Name
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" />
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                ID
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" />
                        </div>
                        <div class="mb-4">
                            <select class="form-select block mb-2 text-sm font-bold text-gray-700" for="email" id="levelTerm">
                                <option selected>Select Level & Term</option>
                            </select>

                        </div>

                        <div class="mb-4">
                            <select class="form-select block mb-2 text-sm font-bold text-gray-700" for="email" id="courseType">
                                <option selected>Select Course Type</option>
                            </select>

                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <select class="block mb-2 text-sm font-bold text-gray-700" for="password" id="course">
                                    <option selected>Select Course</option>
                                </select>
                            </div>
                            <div class="md:ml-2">
                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="text" placeholder="Enter number " />
                            </div>
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <select class="block mb-2 text-sm font-bold text-gray-700" for="password" id="course1">
                                    <option selected>Select Course</option>
                                </select>
                            </div>
                            <div class="md:ml-2">

                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="text" placeholder="Enter number " />
                            </div>
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <select class="block mb-2 text-sm font-bold text-gray-700" for="password" id="course2">
                                    <option selected>Select Course</option>
                                </select>
                            </div>
                            <div class="md:ml-2">

                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="text" placeholder="Enter number " />
                            </div>
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <select class="block mb-2 text-sm font-bold text-gray-700" for="password" id="course3">
                                    <option selected>Select Course</option>
                                </select>
                            </div>
                            <div class="md:ml-2">

                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="text" placeholder="Enter number " />
                            </div>
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <select class="block mb-2 text-sm font-bold text-gray-700" for="password" id="course4">
                                    <option selected>Select Course</option>
                                </select>
                            </div>
                            <div class="md:ml-2">

                                <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" type="text" placeholder="Enter number " />
                            </div>
                        </div>

                        <button type="submit" class="btn btn-accent">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection