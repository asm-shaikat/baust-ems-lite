<!-- Which file i want to extend -->
@extends('welcome');

@section('title','Login');
<!-- Loading content -->
@if(Session::get('loginfailed'))
        {{session::get('loginfailed')}}
    @endif
@section('content');
<!-- component -->
<div class="h-full  -mt-24 flex justify-center items-center  w-full ">
    
    <form action="{{ route('auth.login') }}" method="post" enctype="multipart/form">
        @csrf
        <div class=" bg-violet-600  px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
            <img class="h-24 mb-4 mx-auto" src="/images/BAUST.png" alt="">
            <div class="space-y-4">
                <h1 class="text-center text-2xl font-semibold text-white">Login</h1>
                <div class="pb-8">
                    <label for="email" class="block mb-1 text-white font-semibold">Email</label>
                    <input type="text" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="email" placeholder="Enter email address"/>
                    <p class="text-red-500">@error('email') {{$message}}  @enderror</p>
                </div>
                <div class="pb-8">
                    <label for="password" class="block mb-1 text-white font-semibold">Password</label>
                    <input type="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" name="password" placeholder="Enter your password"/>
                    <p class="text-red-500">@error('password') {{ $message }}  @enderror</p>
                </div>
            </div>
                <div class="pb-8">
                <button class="mt-4 w-full bg-yellow-500 font-semibold py-2 text-white  rounded-md  tracking-wide">Signin</button>
                </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
@endsection