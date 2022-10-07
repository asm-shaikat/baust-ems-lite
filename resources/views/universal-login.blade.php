<!-- Which file i want to extend -->
@extends('welcome')

@section('title','Login')

<!-- Loading content -->

@section('content')
<!-- component -->


<div class="h-screen flex justify-center items-center w-auto -mt-16">

    <form action="{{ route('auth.login') }}" method="post" enctype="multipart/form">
        @csrf
        <div class="glass px-6 py-4 rounded-xl w-screen shadow-md max-w-sm z-0 font-serif font-family:ui-serif">
            <img class="h-24 mb-4 mx-auto" src="/images/BAUST.png" alt="BAUST_Logo">
            <div class="space-y-4">
                <h1 class="text-center text-4xl text-white pb-3">BAUST EMS CONNECT</h1>
                <div class="">
                    <label for="email" class="block mb-1 text-white">Email</label>
                    <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="email" placeholder="Enter email address"/>
                    <p class="text-red-500"><b>@error('email') {{ $message }}  @enderror</b></p>
                </div>
                <div class="">
                    <label for="password" class="block mb-1 text-white">Password</label>
                    <input type="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="password" placeholder="Enter your password"/>
                    <p class="text-red-500"><b>@error('password') {{ $message }}  @enderror</b></p>
                </div>
            </div>
                <div class="pb-8">
                <button class="mt-4 w-full bg-blue-700 py-2 text-white rounded-md tracking-wide">Sign In</button>
                </div>
        </div>
    </form>

</div>

<!-- Showing login error messege  -->
@if(Session::get('loginfailed'))
<div id="alert2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
  {{session::get('loginfailed')}} 
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
@elseif(Session::get('Emailloginfailed'))
<div id="alert2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
  {{session::get('Emailloginfailed')}} 
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
@elseif(Session::get('Passloginfailed'))
<div id="alert2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
  <span class="sr-only">Info</span>
  <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
  {{session::get('Passloginfailed')}} 
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert2" aria-label="Close">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div>
@endif
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
@endsection

<!-- End  of Showing login error messege  -->
