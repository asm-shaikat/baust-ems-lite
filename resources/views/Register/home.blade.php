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

<div class="flex">
    
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">CSE Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentCSE }}</th>
                <th>{{ $countPassStudentCSE }}</th>
            </tr>            
        </table>
    </div>
    </div>
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">EEE Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentEEE }}</th>
                <th>{{ $countPassStudentEEE }}</th>
            </tr>            
        </table>
    </div>
    </div>
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">ME Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentME }}</th>
                <th>{{ $countPassStudentME }}</th>
            </tr>            
        </table>
    </div>
    </div>
</div>
<div class="flex">
    
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">ICT Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentICT }}</th>
                <th>{{ $countPassStudentICT }}</th>
            </tr>            
        </table>
    </div>
    </div>
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">CE Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentCE }}</th>
                <th>{{ $countPassStudentCE }}</th>
            </tr>            
        </table>
    </div>
    </div>
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">IPE Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentIPE }}</th>
                <th>{{ $countPassStudentIPE }}</th>
            </tr>            
        </table>
    </div>
    </div>
</div>

<div class="flex">
    
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">BBA Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentBBA }}</th>
                <th>{{ $countPassStudentBBA }}</th>
            </tr>            
        </table>
    </div>
    </div>
    <div class="card card-compact w-96 bg-base-100 shadow-xl row-span-3 mr-10 mb-10">
    <div class="card-body">
        <h2 class="card-title">ENGLISH Department's Students<h2>
        <table>
            <tr>
                <th>Current Students</th>
                <th>Undergraduate Students</th>
            </tr>
            <tr>
                <th>{{ $countCurrentStudentENGLISH }}</th>
                <th>{{ $countPassStudentENGLISH }}</th>
            </tr>            
        </table>
    </div>
    </div>
    
</div>
@endsection