@extends('welcome')

@include('navbar')
@section('title','Recruiter || Dashboard')

@section('content')
<div>

    <div class="flex flex-col w-full lg:flex-row mt-10 w-4/5 ml-72 pl-32">
        <a href="{{ url('/recruiter/profile') }}">
            <div class="grid w-32 h-32 bg-purple-600 dark:bg-purple-600 place-items-center">
                <i class="fa-solid fa-user fa-3x text-white"></i>
            </div>
        </a>
        <div class="divider lg:divider-horizontal"></div>
        <a href="{{ url('/recruiter/add-student') }}" class="">
            <div class="grid w-32 h-32 bg-purple-600 dark:bg-purple-600 place-items-center">
                <i class="fa-solid fa-plus fa-3x text-white"></i>
            </div>
        </a>
        <div class="divider lg:divider-horizontal"></div>
        <a href="{{ url('/recruiter/update-Students-info') }}">
            <div class="grid w-32 h-32 bg-purple-600 dark:bg-purple-600 place-items-center">
                <i class="fa-solid fa-pen-to-square fa-3x text-white"></i>
            </div>
        </a>
    </div>

    <div class="grid grid-cols-4 gap-4 pt-10">
        
    <!-- L-4 T-2 -->
    <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-4 Term-2</p>
            @foreach ($fourtwos as $fourtwo)
            <div class="flex">
                <p class="text-sm p-1">{{ $fourtwo->dept_id }}</p>
                <p class="text-sm p-1">{{ $fourtwo->name }}</p>
            </div>
            @endforeach
        </div>

        <!-- L-4 T-1 -->

        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-4 Term-1</p>
            @foreach ($fourones as $fourone)
            <div class="flex">
                <p class="text-sm p-1">{{ $fourone->dept_id }}</p>
                <p class="text-sm p-1">{{ $fourone->name }}</p>
            </div>
            @endforeach
        </div>


        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-3 Term-2</p>
            @foreach ($threetwos as $threetwo)
            <div class="flex">
                <p class="text-sm p-1">{{ $threetwo->dept_id }}</p>
                <p class="text-sm p-1">{{ $threetwo->name }}</p>
            </div>
            @endforeach


        </div>

        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-3 Term-1</p>
            @foreach ($threeones as $threeone)
            <div class="flex">
                <p class="text-sm p-1">{{ $threeone->dept_id }}</p>
                <p class="text-sm p-1">{{ $threeone->name }}</p>
            </div>
            @endforeach
        </div>

        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-2 Term-2</p>
            @foreach ($twotwos as $twotwo)
            <div class="flex">
                <p class="text-sm p-1">{{ $twotwo->dept_id }}</p>
                <p class="text-sm p-1">{{ $twotwo->name }}</p>
            </div>
            @endforeach
        </div>

        <!-- L2 T-1 -->
        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-2 Term-1</p>
            @foreach ($twoones as $twoone)
            <div class="flex">
                <p class="text-sm p-1">{{ $twoone->dept_id }}</p>
                <p class="text-sm p-1">{{ $twoone->name }}</p>
            </div>
            @endforeach
        </div>

        <!-- L-1 T-2 -->
        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-1 Term-2</p>
            @foreach ($onetwos as $onetwo)
            <div class="flex">
                <p class="text-sm p-1">{{ $onetwo->dept_id }}</p>
                <p class="text-sm p-1">{{ $onetwo->name }}</p>
            </div>
            @endforeach
        </div>

        <!-- L-1 T-1 -->
        <div class="card w-52 bg-base-100 shadow-xl">
            <p class="text-center">Level-1 Term-1</p>
            @foreach ($oneones as $oneone)
            <div class="flex">
                <p class="text-sm p-1">{{ $oneone->dept_id }}</p>
                <p class="text-sm p-1">{{ $oneone->name }}</p>
            </div>
            @endforeach
        </div>


    </div>

    <div class="p-2">
        {{ $threetwos->links('') }}
    </div>
</div>
@endsection