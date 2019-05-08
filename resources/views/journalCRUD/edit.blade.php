@extends('layouts.app')
<!-- layouts.admin') -->

<style>
    p {
        color: #636b6f;
        padding: 0 25px;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    label {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .btn {
        padding: 0 25px;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
 
@section('content')
<div class="container" style="margin-left: 270px;">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" style="border-color: #9c1a04; border-style: solid; border-width: 1px; padding-bottom: 10px; margin-top: 10px;">
        <div class="panel-heading" style="background-color: #9c1a04; color: white; font-size: 20px; padding-left:20px;"><p style="color: white; font-size: 15px;">Edit Journal Information</div>

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
                <label style="color: black;">Title:</label>
                {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <label style="color: black;">Author/s:</label>
                {!! Form::text('author', null, array('placeholder' => 'Author/s','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <label style="color: black;">Date Published:</label>
                {!! Form::text('date', null, array('Placeholder' => 'Can also input year only or month and year only. [Ex: March 1998]','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-md-9">
            <div class="form-group">
                <label style="color: black;">Abstract:</label>                
                {!! Form::text('abstract', null, array('Placeholder' => 'Abstract [can be empty.]','class' => 'form-control')) !!}
            </div>
        </div>

        <!-- <div class="col-md-9">
            <div class="form-group">
                <strong>Regional Office:</strong>
                {!! Form::select('office', array('National Capital Region' => 'National Capital Region','Region I' => 'Region I', 'Region II' => 'Region II', 'Region III' => 'Region III', 'Region IV' => 'Region IV', 'Region V' => 'Region V', 'Region VI' => 'Region VI', 'Region VII' => 'Region VII', 'Region VIII' => 'Region VIII', 'Region IX' => 'Region IX', 'Region X' => 'Region X', 'Region XI' => 'Region XI', 'Region XII' => 'Region XII', 'Region XIII' => 'Region XIII', 'Region XIV' => 'Region XIV')) !!}
            </div>
        </div> -->

        <div class="col-md-9">
            <div class="form-group">
                <label style="color: black;">Field/s: </label>
                    @if(!empty($subjects))
                        @foreach ($subjects as $subject)
                             <br><label><input type="checkbox" name="subject_checked[]" value="{{ $subject->id }}"> {{$subject->field}}</label>
                        @endforeach
                    @endif
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