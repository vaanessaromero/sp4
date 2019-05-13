@auth
    @if ($user->access_level == 0)
        @extends('layouts.admin')
    @else
        @extends('layouts.approver')
    @endif
@endauth

<!-- layouts.admin -->
 
@section('content')

<!-- MODAL FOR ADD -->
<div id="addModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Subject Field</h4>
                </div>
                {!! Form::open(array('route' => 'subjectCRUD.store','method'=>'POST')) !!}
                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::text('field', null, array('placeholder' => 'Insert Subject Field','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
<!-- ------------------------=---------------------------------------- -->

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12 margin-tb">

        <div class="card">
             <div class="card-header" style="background-color:  #77ab59; color: white; font-size: 20px; padding-left: 20px;">Subject Fields
                <div class="pull-right">
                    <a class="btn" data-toggle="modal" href="#addModal" data-toggle="modal" style="background-color: RGB(201, 59, 45); color: white"> Add</a>
                </div>

             </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
            @foreach ($subjects as $subject)
            <tr>
                <td class= "color">{{ $subject->field }} </td>
                <td width="50px">
                    {!! Form::open(['method' => 'DELETE','route' => ['subjectCRUD.destroy', $subject->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('✖', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
            </table>

            <div class="container-fluid">
                {{ $subjects->links('pagination::bootstrap-4') }}
            </div>
        </div>
</div>
</div>
</div>

@endsection