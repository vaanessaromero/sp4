@extends('layouts.admin')
<!-- layouts.admin -->

@section('content')
<div class="wrapper wrapper-content">
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px;">Create User</div>


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
    {!! Form::open(array('route' => 'userCRUD.store','method'=>'POST')) !!}
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        {!! Form::text('first_name', null, array('placeholder' => 'First name','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        {!! Form::text('last_name', null, array('placeholder' => 'Last name','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('Placeholder' => 'Email Address','class' => 'form-control')) !!}
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', null, array('Placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                </div>

                 <div class="col-md-9">
                    <div class="form-group">
                        <strong>Role:</strong>
                            {!! Form::select('access_level', array('1' => 'User','0' => 'Admin')) !!}
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        <strong>Regional Office</strong>
                        {!! Form::select('branch', array('National Capital Region' => 'National Capital Region','Region I' => 'Region I', 'Region II' => 'Region II', 'Region III' => 'Region III', 'Region IV' => 'Region IV', 'Region V' => 'Region V', 'Region VI' => 'Region VI', 'Region VII' => 'Region VII', 'Region VIII' => 'Region VIII', 'Region IX' => 'Region IX', 'Region X' => 'Region X', 'Region XI' => 'Region XI', 'Region XII' => 'Region XII', 'Region XIII' => 'Region XIII', 'Region XIV' => 'Region XIV')) !!}
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
</div>


@endsection