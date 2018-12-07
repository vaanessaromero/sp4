@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            @auth
                @if ($user->access_level == 0)
                    <a class="btn btn-danger" href="{{ url('/admin/home') }}">Back</a>
                
                @else
                    <a class="btn btn-danger" href="{{ url('/home') }}">Back</a>
                @endif
            @else
                <a class="btn btn-danger" href="{{ url('/') }}">Back to HOME</a>
            @endauth
        </div>
    </div> -->

    <div class="row" align="center">
        <div class="col-sm-4" style="margin-left: 200px;">
            <br>
            <div class="floated_img" style="float: left;">
                <a href="{{ url('/search') }}" class="btn btn-default btn-rounded mb-4"><img style="width: 120px;" src="{{ asset('assets/img/search_1_logo.png') }}"></a>
                <br><center><p style="font-size: 15px; color: black"><strong>Search with constraints.</strong></p></center><br>
            </div>
        </div>
        <div class="col-sm-4">
            <br>
            <div class="floated_img" style="float: left;">
                <a href="{{ url('/SearchQuery') }}" class="btn btn-default btn-rounded mb-4"><img style="width: 120px;" src="{{ asset('assets/img/search_2_logo.png') }}"></a>
                <br><center><p style="font-size: 15px; color: black"><strong>Search through keywords, title, author, etc.</strong></p></center><br>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="card">
                <div class="card-header" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;">SEARCH RESULTS</div>

                
                @if (empty($selected_region))
                    <br>
                    <div class="row" style="margin-left: 5px; margin-right: 5px;">
                        <div class="col">
                            <form id="elasticScout" action="/SearchQuery" method="get">
                                <div class="mysearchbar">
                                     <input name="search" class="form-control" placeholder="enter keyword">
                                 </div>
                            </form>
                        </div>

                        <div class="col">
                            <form id="elasticScout" action="/SearchQuery" method="get">
                                <div class="mysearchbar">
                                     <input name="search" class="form-control" placeholder="enter title">
                                 </div>
                            </form>
                        </div>

                        <div class="col">
                            <form id="elasticScout" action="/SearchQuery" method="get">
                                <div class="mysearchbar">
                                     <input name="search" class="form-control" placeholder="enter author">
                                 </div>
                            </form>
                        </div>

                        <div class="col">
                            <form id="elasticScout" action="/SearchQuery" method="get">
                                <div class="mysearchbar">
                                     <input name="search" class="form-control" placeholder="enter date">
                                 </div>
                            </form>
                        </div>
                        
                    </div>
                    <br>
                @endif
                 
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Author/s</th>
                        <th>Date Published</th>
                        <!-- <th>Abstract</th> -->
                        <th>Regional Office</th>
                        <th>Download File</th>
                        @auth
                            <th width="150px">Action</th> 
                        @endauth
                    </tr>
                    @if(!empty($journals))
                        @foreach ($journals as $journal)
                            <tr>
                                <td class= "color">{{ $journal->title }}</td>
                                <td class= "color">{{ $journal->author }}</td>
                                <td class= "color">{{ $journal->date }}</td>
                                <!-- <td class= "color">{{ $journal->abstract }}</td> -->
                                <td class= "color">{{ $journal->office }}</td>
                                <td align="center"><a class="btn btn-danger" target="_blank" rel="noopener noreferrer" href="{{ $journal->pdf_url }}">⟱</a></td>
                                </td>
                                @auth
                                    <td>
                                        @if ($user->branch == $journal->office || $user->access_level == 0)
                                            <a class="btn btn-primary" href="{{ route('journalCRUD.edit',$journal->id) }}">Edit</a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['journalCRUD.destroy', $journal->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endif
                                        
                                    </td>
                                @endauth
                            </tr>
                        @endforeach
                    @endif
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection