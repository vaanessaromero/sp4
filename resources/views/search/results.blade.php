@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            @auth
                @if ($user->access_level == 0)
                    <a class="btn btn-danger" href="{{ url('/admin/home') }}">Back</a>
                
                @else
                    <a class="btn btn-danger" href="{{ url('/home') }}">Back</a>
                @endif
            @else
                <a class="btn btn-danger" href="{{ url('/') }}">Back</a>
            @endauth
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-header" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;">SEARCH RESULTS</div>

                <br>
                <form id="elasticScout" action="/SearchQuery" method="get">
                     <div class="mysearchbar">
                         <input name="search" class="form-control" placeholder="Search...">
                     </div>
                </form>
                 <br>
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Author/s</th>
                        <th>Date Published</th>
                        <th>Abstract</th>
                        <th>Office</th>
                        <th>PDF File</th>
                    </tr>
                    @if(!empty($journals))
                        @foreach ($journals as $journal)
                            <tr>
                                <td class= "color">{{ $journal->title }}</td>
                                <td class= "color">{{ $journal->author }}</td>
                                <td class= "color">{{ $journal->date }}</td>
                                <td class= "color">{{ $journal->abstract }}</td>
                                <td class= "color">{{ $journal->office }}</td>
                                <td><a class="btn btn-primary" target="_blank" rel="noopener noreferrer" href="{{ $journal->pdf_url }}">FILE</a></td>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection