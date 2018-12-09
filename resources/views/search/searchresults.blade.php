@extends('layouts.app')
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

@if(!empty($journals))
    @foreach ($journals as $journal)
    <div class="container-fluid" id="main_cont">
	    <br><a href="" style="color: white">{{ $journal->title }}</a><br><br>       
	    <p style="color: white">
            @if(!empty($authors))
                @foreach ($authors as $author)
                    {{ $author->last_name }}, {{ $author->first_name }} |
                @endforeach
            @endif
        </p>            
	    <p style="color: white">{{ $journal->date }}</p>
	    <a class="btn btn-light" style="margin-left: 360px;" align="center" target="_blank" rel="noopener noreferrer" href="{{ $journal->pdf_url }}">⟱</a>
	    <br><br>
	</div>
    @endforeach
@else
	<p align="center" style="color: black;">no results found</p>
@endif


@endsection