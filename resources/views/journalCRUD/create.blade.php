@extends('layouts.app')
<!-- layouts.admin -->

@section('content')

<!-- MODAL FOR PDF DOWNLOAD -->
<div class="modal fade" id="modalPDFForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Upload PDF FIle</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="panel-body">
            <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('uploadPDF')  }}">
                {{ csrf_field() }}

                @if(session()->has('pdf_url'))
                  <div class="alert alert-info" role="alert">
                    <p>Copy Link then paste to PDF URL</p>
                    {{session()->get('pdf_url')}}
                  </div>
                @endif
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <input type="file" name="pdf_name" class="form-control" id="name" value="">
                @if($errors->has('pdf_name'))
                  <span class="help-block">{{ $errors->first('pdf_name') }}</span>
                 @endif
             </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn" style="background-color:white; color: RGB(164, 16, 19);">
                            Upload
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ------------------------=---------------------------------------- -->

<div class="container" >
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" style="border-color: RGB(201, 59, 45); border-style: solid; border-width: 1px; padding-bottom: 10px;">
        <div class="panel-heading" style="background-color: RGB(201, 59, 45); color: white; font-size: 20px; padding-left:20px;">Add Journal</div>


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
        <!-- CALL PDF MODAL -->
        <div class="text-center">
          <a href="" class="btn btn-danger btn-rounded mb-4" data-toggle="modal" data-target="#modalPDFForm">Upload PDF File</a>
        </div>
    {!! Form::open(array('route' => 'journalCRUD.store','method'=>'POST')) !!}
            <div class="row">
                <br>

                <div class="col-md-9">
                    <div class="form-group">
                        <strong>PDF URL:</strong>
                        {!! Form::text('pdf_url', null, array('placeholder' => 'URL','class' => 'form-control')) !!}
                    </div>
                </div>


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
                        {!! Form::text('date', null, array('Placeholder' => 'YYYY-MM-DD','class' => 'form-control')) !!}
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
                        <strong>Office:</strong>
                        {!! Form::text('office', null, array('placeholder' => 'Office','class' => 'form-control')) !!}
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