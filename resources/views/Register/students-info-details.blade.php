@extends('welcome')
<!-- Title -->
@section('title','Add Employees')
<!-- Navbar -->
@include('Register.navbar')
@section('content')
@foreach($data as $data)
<div class="w-full drop-shadow-lg -mt-20 ">
  <div class="h-screen rounded-box place-items-center text-white p-10 glass text-center w-3/5 ml-80">
      <p class="text-2xl">Student Information</p>
    <p>Full name: {{ $data->name }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Mobile no: {{ $data->s_phone }}</p>
    <p>Gender: {{ $data->gender }}</p>
    <p>Blood Group: {{ $data->blood }}</p>
    <p>Permanent Address: {{ $data->permanent_address }}</p>
    <p>Present address: {{ $data->present_address }}</p>
    <p>Birth date: {{ $data->b_date }}</p>
    <p>Father's name: {{ $data->f_name }}</p>
    <p>Father's contact: {{ $data->f_phone }}</p>
    <p>Mother's name: {{ $data->m_name }}</p>
    <p>Mother's contact: {{ $data->m_phone }}</p>
  </div> 
</div>
@endforeach
@endsection