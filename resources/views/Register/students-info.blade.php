@extends('welcome')
<!-- Title -->
@section('title','Add Employees')
<!-- Navbar -->
@include('Register.navbar')
@section('content')
<div class="overflow-x-auto  w-full">
    <p class="w-50 ml-60 text-center font-bold text-2xl dark:text-white">All Students</p>
  <table class="table w-50 ml-72 absolute bg-teal-800 text-white">
    <!-- head -->
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>View</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($studentInfo as $studentInfo)
      <tr>
        <th>{{ $studentInfo->id }}</th>
        <td>{{ $studentInfo->name }}</td>
        <td>{{ $studentInfo->email }}</td>
        <td>{{ $studentInfo->s_phone }}</td>
        <td><a href="{{ url('register/view-details-student-info',$studentInfo) }}">View Details</a></td>
    </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection