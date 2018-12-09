@extends('layouts.app')
<style>
    #main_cont{
        background-color:  white;;
        border-width: 2px;
        color: black;
        border-style: solid;
        border-color: #77ab59;
        width: 50%;
        float: left;
        margin-top: 20px;
        margin-left: 350px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    a,h1,p {
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

</style>
@section('content')

<div class="container-fluid" id="main_cont" align="center">
    <center><img style="width: 120px; float: center; margin-top: 15px;" src="{{ asset('assets/img/sfield_logo.png') }}"></center>
    <br><p align="center" style="color: black; font-size: 20px;">SUBJECT FIELDS</p>
    @if(!empty($subjects))
        @foreach ($subjects as $subject)
             <a href="/searchresults" style="color: #234d20;">{{ $subject->field }}</a><br>
    
        @endforeach
    @else
        <p align="center" style="color: black;">no results found</p>
    @endif
    <br>
</div>

@endsection