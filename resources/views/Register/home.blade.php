@extends('welcome')

<!-- Navbar -->
@include('Register.navbar')


@section('title','Home')

@section('content')
<!-- component -->
<div class="overflow-x-auto">
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Birth</th>
        <th>Blood Group</th>
        <th>Gender</th>
        <th>Permanent Address</th>
        <th>Present Address</th>
        <th>Gender</th>
        <th>Father's Name</th>
        <th>Father's Contact</th>
        <th>Mother's Name</th>
        <th>Mother's Contact</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>Quality Control Specialist</td>
        <td>Blue</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection