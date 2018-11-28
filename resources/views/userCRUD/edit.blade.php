@extends('layouts.app')
<!-- layouts.admin') -->
 
@section('content')
<div class="wrapper wrapper-content">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;">Edit User Info</div>

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
    {!! Form::model($user, ['method' => 'PATCH','route' => ['userCRUD.update', $user->id]]) !!}
    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <strong>First Name:</strong>
                {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <strong>Last Name:</strong>
                {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
            </div>
        </div>

        <!-- <div class="col-md-9">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email Address','class' => 'form-control')) !!}
            </div>
        </div> -->

        <div class="col-md-9">
            <div class="form-group">
                <strong>Password:</strong>
                {!! Form::text('password', null, array('placeholder' => 'Password','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <strong>DOST-PCAARRD Branch:</strong>
                {!! Form::text('branch', null, array('placeholder' => 'DOST-PCAARRD Branch','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-primary" href="{{ route('userCRUD.index') }}"> Back</a>
                <button type="submit" class="btn btn-danger">Submit</button>
        </div>


    </div>
    {!! Form::close() !!}
    </div>
</div>
</div>

@endsection