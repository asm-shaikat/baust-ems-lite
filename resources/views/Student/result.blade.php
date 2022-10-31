@extends('Student.welcome')
@section('title','Home')
@extends('Student.navbar')
@section('content')
<p class="text-center text-3xl">Result</p>

<div class="flex">
    <div class="p-10 text-2xl mr-32">
        @if(count($getTheoryData)>0)
        <p>{{ $getTheoryData[0]->course_type }}</p>
        <p>{{ $getTheoryData[0]->level_term }}</p>
        <p>{{ $getTheoryData[0]->course }}</p>
        <p>{{ $getTheoryData[0]->course1 }}</p>
        <p>{{ $getTheoryData[0]->course2 }}</p>
        <p>{{ $getTheoryData[0]->course3 }}</p>
        <p>{{ $getTheoryData[0]->course4 }}</p>
        @else
        <p>Theory Result Not Published yet</p>
        @endif
    </div>
    <div class="p-10 text-2xl ml-32">
        @if(count($getSessionalData)>0)
        <p>{{ $getSessionalData[0]->course_type }}</p>
        <p>{{ $getSessionalData[0]->level_term }}</p>
        <p>{{ $getSessionalData[0]->sessional }}</p>
        <p>{{ $getSessionalData[0]->sessional1 }}</p>
        <p>{{ $getSessionalData[0]->sessional2 }}</p>
        <p>{{ $getSessionalData[0]->sessional3 }}</p>
        <p>{{ $getSessionalData[0]->sessional4 }}</p>
        @else
        <p>Theory Result Not Published yet</p>
        @endif
    </div>
</div>
@endsection