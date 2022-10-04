@extends('welcome')
<!-- Title -->
@section('title','Employees')
<!-- Navbar -->
@include('Register.navbar')
@section('content')
<p class="w-full text-center text-2xl bg-cyan-500 text-white p-2">Employees</p>
<div class="grid grid-cols-3 gap-4">

    @foreach($data as $data)
    <div class=" ">
        <div class="card w-80 glass absolute">
            <!-- Choice 1 avater -->
            <div class="avatar offline ml-32 p-2">
                <div class="w-20 rounded-full">
                    <img src="https://placeimg.com/192/192/people" />
                </div>
            </div>

            <!--Choice 2 icon  -->
            <!-- <i class="fa-solid fa-circle-user fa-5x ml-32 p-4"></i> -->

            <div class="card-body">
                <p class="card-title">{{ $data->name }}</p>
                <p class="text-uppercase">Designation: {{ $data->post }}</p>
                <p class="text-uppercase">Phone : {{ $data->phone }}</p>
                <p class="text-uppercase">Department : {{ $data->eDept }}</p>
                <div class="card-actions justify-center">
                    <a href="{{ url('/register/employees-info/'.$data->id) }}"><i class="fa-solid fa-eye fa-2x"><abbr title="View"></abbr></i></a>
                </div>
            </div>
        </div>

    </div>
    @endforeach
</div>

@endsection