@extends('welcome')

@include('navbar')
@section('title','Recruiter')

@section('content')
<div class="div_add">
  <form action="" method="post">
    <label for="fname">First Name</label>
    <input class="input_text" type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input class="input_text" type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select class="input_select" id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input class="input_submit" type="submit" value="Submit">
  </form>
</div>
@endsection