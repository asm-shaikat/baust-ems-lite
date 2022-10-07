@extends('welcome')
<!-- Title -->
@section('title','Update Students Info')
<!-- Navbar -->
@include('navbar')
@section('content')
<div class="overflow-x-auto  w-full">
    <p class="w-50 ml-60 text-center font-bold text-2xl dark:text-white">All Students</p>
  <table class="table w-50 ml-72 absolute">
    <!-- head -->
    <thead>
      <tr class="dark:text-white">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($data as $data)
      <tr class="dark:text-white">
        <th>{{ $data->id }}</th>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->s_phone }}</td>
        <td><a href="{{ url('/recruiter/update-Students-info-details/'.$data->id) }}"><button class="btn btn-danger">Edit</button></a></td>
    </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection