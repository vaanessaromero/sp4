@extends('layouts.admin')
<!-- layouts.admin -->
 
@section('content')

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 margin-tb">

        <div class="card">
             <div class="card-header" style="background-color:  #77ab59; color: white; font-size: 20px; padding-left: 20px;">User List
                <div class="pull-right">
                    <a class="btn" href="{{ route('userCRUD.create') }}" style="background-color: RGB(201, 59, 45); color: white"> Create User</a>
                </div>

             </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Office</th>
                   <!--  <th>Password</th> -->
                    <th width="150px">Action</th>
                </tr>
            @foreach ($user as $key => $user)
            <tr>
                <!-- <td>{{ ++$i }}</td> -->
                <td class= "color">{{ $user->id }} </td>
                <td class= "color">{{ $user->first_name }}</td>
                <td class= "color">{{ $user->last_name }}</td>
                <td class= "color">{{ $user->email }}</td>
                <td class= "color">
                @if ($user->access_level == '0')
                    <p style="color: red"> Admin </p>
                @else
                    <p style="color: orange"> User </p>
                @endif
                <td class= "color">{{ $user->branch }}</td>
                </td>
              <!--   <td>{{ $user->password }}</td> -->
                <td>
                    <a class="btn btn-primary" href="{{ route('userCRUD.edit',$user->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['userCRUD.destroy', $user->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </table>
            <!--  -->
        </div>
</div>
</div>
</div>

@endsection