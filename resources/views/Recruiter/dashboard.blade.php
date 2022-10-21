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
        <div class="card w-52 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card w-52 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
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
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card w-52 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card w-52 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card w-52 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card w-52 bg-base-100 shadow-xl">
            <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>


    </div>

    <div class="p-2">
        {{ $threetwos->links('') }}
    </div>
</div>
@endsection