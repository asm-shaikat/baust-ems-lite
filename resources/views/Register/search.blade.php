@extends('welcome')

@section('title','Search Student')

@include('Register.navbar')
@section('content')
<div class="-mt-16 p-4">
  <form action="{{ url('/register/search/result') }}" method="post">
    @csrf
    <div>
      <div class="input-group">
        <input type="text" name="search" placeholder="Search here.." class="w-50 input input-bordered  dark:bg-slate-300" />
        <button class="btn btn-danger">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </div>
      <div>
        @if(Session::get('failed'))
        <p class="text-red-500 font-bold text-2xl p-2">{{ session::get('failed') }}<i class="ml-2 fa-regular fa-face-sad-tear"></i></p>
        @endif
      </div>
    </div>
  </form>
  <div class="overflow-x-auto">
    <table class="table w-full bg-teal-800 text-white">
      <!-- head -->
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Department</th>
          <th>Father's Name</th>
          <th>Mother's Name</th>
        </tr>
      </thead>
      @if($searchResult)
      @foreach($searchResult as $searchResult)
      <tbody>
        <tr>
          <th>{{ $searchResult->id }}</th>
          <td>{{ $searchResult->name }}</td>
          <td>{{ $searchResult->email }}</td>
          <td>{{ $searchResult->s_phone }}</td>
          <td>{{ $searchResult->dept }}</td>
          <td>{{ $searchResult->f_name }}</td>
          <td>{{ $searchResult->m_name }}</td>
        </tr>
      </tbody>
      @endforeach
      @endif
    </table>
  </div>
</div>
@endsection