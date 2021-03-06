@extends('layouts.app')

<!-- layouts.admin -->
 
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
            @endauth
        </div>
    </div> -->
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">

        <div class="card">
             <div class="card-header" style="background-color: #234d20; color: white; font-size: 22px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;;">
                @auth
                    @if ($user->access_level == 0)
                        LIBRARY INDEX
                    
                    @else
                        {{$user->branch}} LIBRARY INDEX
                    @endif
                @endauth
                <div class="float-sm-right">
                    <a class="btn" href="{{ route('journalCRUD.create') }}" style="background-color: #77ab59; color: white"> Add Journal</a>
                    @auth
                        @if ($user->access_level == 0)
                            <a class="btn" href="/admin/home" style="background-color: #77ab59; color: white"> Back</a>
                        @else
                            <a class="btn" href="{{ route('home') }}" style="background-color: #77ab59; color: white"> Back</a>
                        @endif
                    @endauth
                    
                </div>

             </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr align="center">
                    <th>Title</th>
                    <th>Author/s</th>
                    <th>Date Published</th>
                    <!-- <th>Abstract</th> -->
                    <th>Office</th>
                    <th>Subject Field/s</th>
                    <th >Download File</th>
                   <!--  <th>Password</th> -->
                    <th width="150px">Action</th>
                </tr>
            
            @foreach ($journals as $journal)
            <tr>
                @auth
                    @if ($user->access_level == 0) 
                        <td class= "color">{{ $journal->title }}</td>
                        <td class= "color">
                            {{ $journal->author }}
                        </td>
                        <td class= "color">{{ $journal->date }}</td>
                        <!-- <td class= "color">{{ $journal->abstract }}</td> -->
                        <td class= "color">{{ $journal->office }}</td>
                        <td class= "color">
                            @if(!empty($journal_subject))
                                @foreach ($journal_subject as $j_s)
                                    @if($journal->id == $j_s->journal_id)
                                        @foreach ($subjects as $s)
                                            @if($j_s->subject_id == $s->id) {{$s->field}}<br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @else
                            @endif
                        </td>
                        <td align="center"><a class="btn btn-success" target="_blank" rel="noopener noreferrer" href="{{ $journal->pdf_url }}">⟱</a></td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('journalCRUD.edit',$journal->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['journalCRUD.destroy', $journal->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    @elseif ($user->branch == $journal->office)
                        <td class= "color">{{ $journal->title }}</td>
                        <td class= "color">{{ $journal->author }}</td>
                        <td class= "color">{{ $journal->date }}</td>
                        <!-- <td class= "color">{{ $journal->abstract }}</td> -->
                        <td class= "color">{{ $journal->office }}</td>
                        <td class= "color">
                            @if(!empty($journal_subject))
                                @foreach ($journal_subject as $j_s)
                                    @if($journal->id == $j_s->journal_id)
                                        @foreach ($subjects as $s)
                                            @if($j_s->subject_id == $s->id) {{$s->field}}<br>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            @else
                            @endif
                        </td>
                        <td align="center"><a class="btn btn-success" target="_blank" rel="noopener noreferrer" href="{{ $journal->pdf_url }}">⟱</a></td>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('journalCRUD.edit',$journal->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['journalCRUD.destroy', $journal->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    @endif
                @endauth
                
            </tr>
            @endforeach

            </table>
            <div class="container-fluid">
                {{ $journals->links('pagination::bootstrap-4') }}
            </div>
        </div>
</div>
</div>
</div>

@endsection