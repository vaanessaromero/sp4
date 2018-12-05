@extends('layouts.app')
<!-- layouts.admin') -->
 
@section('content')
<div class="container">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" style="border-color: RGB(201, 59, 45); border-style: solid; border-width: 1px; padding-bottom: 10px; margin-top: 10px;">
        <div class="panel-heading" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;padding-left:20px;">Edit Journal Info</div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <div class="panel-body" style="padding-left: 20px;">
    {!! Form::model($journal, ['method' => 'PATCH','route' => ['journalCRUD.update', $journal->id]]) !!}
    <div class="row">

        <div class="col-md-9">
            <div class="form-group">
                <strong>Title:</strong>
                {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <strong>Author/s:</strong>
                {!! Form::text('author', null, array('placeholder' => 'Author/s','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <strong>Date Published:</strong>
                {!! Form::text('date', null, array('Placeholder' => 'Can also input year only or month and year only. [Ex: March 1998]','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-md-9">
            <div class="form-group">
                <strong>Abstract:</strong>
                {!! Form::text('abstract', null, array('Placeholder' => 'Abstract [can be empty.]','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <strong>DOST-PCAARRD Office:</strong>
                {!! Form::text('office', null, array('placeholder' => 'DOST-PCAARRD Office','class' => 'form-control')) !!}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-primary" href="{{ route('journalCRUD.index') }}"> Back</a>
                <button type="submit" class="btn btn-danger">Submit</button>
        </div>


    </div>
    {!! Form::close() !!}
    
    </div>
</div>
</div>

@endsection