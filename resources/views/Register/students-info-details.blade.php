@extends('welcome')
<!-- Title -->
@section('title','Add Employees')
<!-- Navbar -->
@include('Register.navbar')
@section('content')
<div class="flex flex-col w-full drop-shadow-lg">
  <div class="grid h-20 card bg-base-300 rounded-box place-items-center">
      <p class="text-center text-2xl">Student Information</p>
    @foreach($data as $data)
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

    @endforeach
  <p></p>
  </div> 
</div>
@endsection