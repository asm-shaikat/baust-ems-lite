@extends('welcome')

<!-- Navbar -->
@include('Register.navbar')


@section('title','Home')

@section('content')

<!-- component -->
<style>
    table, tr, th{
        width: 250PX;
        
    }
</style>
<div class="">
    <div class="card card-compact w-96 bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">CSE Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudent }}</th>
                <th>{{ $countPassStudent }}</th>
            </tr>            
        </table>
        <div class="card-actions justify-end">
        <button class="btn btn-primary">Watch</button>
        </div>
    </div>
    </div>
    
</div>
@endsection