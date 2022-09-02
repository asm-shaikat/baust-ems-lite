@extends('welcome');

@section('title','Public')

@section('content')
        
        <p class="text-red-700 text-4xl text-center font-extrabold">Unauthorized Access</p>
        {{ $userinfo['email']   }}
        {{ $userinfo['user_type'] }}
@endsection