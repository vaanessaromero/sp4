@extends('layouts.app')
<!-- layouts.admin -->

@section('content')
<div class="wrapper wrapper-content">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;">Add Journal</div>


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
    <div class="panel-body">
    {!! Form::open(array('route' => 'journalCRUD.store','method'=>'POST')) !!}
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
                        <strong>DOST-PCAARRD Branch:</strong>
                        {!! Form::text('branch', null, array('placeholder' => 'DOST-PCAARRD Branch','class' => 'form-control')) !!}
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
</div>


@endsection