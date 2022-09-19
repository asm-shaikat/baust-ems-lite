@extends('welcome')
<!-- Title -->
@section('title','Add Employees')
<!-- Navbar -->
@include('Register.navbar')
@section('content')
<div class="overflow-x-auto">
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
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
        <td><a href="{{ url('register/view-details-student-info',$studentInfo) }}">View Details</a></td>
    </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection