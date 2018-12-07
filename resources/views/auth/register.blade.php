@extends('layouts.app')

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
        color: #fce7d2;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .btn {
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>

@section('content')
<div class="container" style="width:800px; margin:0 auto;">
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default" align="center" style="width: 30%;padding-bottom: 5px;border-radius: 10px;background-color: #9c1a04;width:800px; margin:0 auto;">
                <div class="panel-heading">
                    <br>
                    <p style="color: white;"><strong>Create An Account</strong></p>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label" style="color: #fce7d2">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" style="color: #fce7d2">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="color: #fce7d2">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color: #fce7d2">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label" style="color: #fce7d2">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!-- <div class="form-group{{ $errors->has('access_level') ? ' has-error' : '' }}">
                            <label for="access_level" class="col-md-4 control-label" style="color: #fce7d2">Access Level</label>

                            <div class="col-md-6">
                                {!! Form::select('access_level', array('1' => 'User','0' => 'Admin')) !!}

                                @if ($errors->has('access_level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('access_level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
                            <label for="branch" class="col-md-4 control-label" style="color: #fce7d2">Regional Office</label>

                            <div class="col-md-6">
                                {!! Form::select('branch', array('National Capital Region' => 'National Capital Region','Region I' => 'Region I', 'Region II' => 'Region II', 'Region III' => 'Region III', 'Region IV' => 'Region IV', 'Region V' => 'Region V', 'Region VI' => 'Region VI', 'Region VII' => 'Region VII', 'Region VIII' => 'Region VIII', 'Region IX' => 'Region IX', 'Region X' => 'Region X', 'Region XI' => 'Region XI', 'Region XII' => 'Region XII', 'Region XIII' => 'Region XIII', 'Region XIV' => 'Region XIV')) !!}

                                @if ($errors->has('branch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('branch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <br><button type="submit" class="btn" style="font-size: 12px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;background-color:white; color: RGB(164, 16, 19);">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="container" align="center" style="width:800px; margin:0 auto;">
                <a class="btn" style="background-color:RGB(164, 16, 19); color: white; font-size: 12px;" href="{{ url('/search') }}">Enter as GUEST</a>
                <a class="btn" style="background-color:RGB(164, 16, 19); color: white; font-size: 12px;" href="{{ url('/') }}">Go BACK</a>
            </div>
        </div>
    </div>
</div>
@endsection








