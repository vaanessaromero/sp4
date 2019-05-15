@extends('layouts.nav')
<style>
    #main_cont{
        background-color: #77ab59;
        color: white;
        width: 65%;
        margin-top: 20px;
        margin-left: 250px;
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
<br><br><br>
<div class="wrapper wrapper-content">
    @if(!empty($journals))
        @foreach ($journals as $journal)
        <div class="container-fluid" id="main_cont" style="">
    	    <br><a href="" style="color: white; font-size:20px; ">{{ $journal->title }}</a><br><br>       
    	    <p style="color: white; font-weight: 400; text-transform: none;">by {{ $journal->author }}</p>            
    	    <p style="color: white; font-weight: 400; text-transform: none;">Published Date: {{ $journal->date }}</p>
            <p style="color: white; font-size: 10px; font-weight: 400; text-transform: none;">Abstract: {{ $journal->abstract }}</p>
    	    <a class="btn btn-warning" style="margin-left: 290px; text-transform: none;" align="center" target="_blank" rel="noopener noreferrer" href="{{ $journal->pdf_url }}">⟱ View & Download PDF File</a>
    	    <br><br>
    	</div>
        @endforeach

    @else
    	<p align="center" style="color: black;">no results found</p>
    @endif
</div>


@endsection