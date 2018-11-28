@extends('layouts.app')
<!-- layouts.admin -->
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">

        <div class="card">
             <div class="card-header" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;">JOURNALS LIBRARY INDEX
                <div class="pull-right">
                    <a class="btn" href="{{ route('journalCRUD.create') }}" style="baackground-color: RGB(201, 59, 45); color: white"> Add Journal</a>
                </div>

             </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>Journal ID</th>
                    <th>Title</th>
                    <th>Author/s</th>
                    <th>Date Published</th>
                    <th>Abstract</th>
                    <th>DOST-PCAARRD Branch</th>
                   <!--  <th>Password</th> -->
                    <th width="280px">Action</th>
                </tr>
            @foreach ($journals as $journal)
            <tr>
                <td class= "color">{{ $journal->id }} </td>
                <td class= "color">{{ $journal->title }}</td>
                <td class= "color">{{ $journal->author }}</td>
                <td class= "color">{{ $journal->date }}</td>
                <td class= "color">{{ $journal->abstract }}</td>
                <td class= "color">{{ $journal->branch }}</td>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('journalCRUD.edit',$journal->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['journalCRUD.destroy', $journal->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </table>

        </div>
</div>
</div>
</div>

@endsection