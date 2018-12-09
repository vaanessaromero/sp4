@extends('layouts.app')
<!-- layouts.admin -->
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
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>

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
                    <p>Successfully uploaded file!</p>
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
                        <button type="submit" class="btn" style="background-color:#234d20; color: white;">
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

<div class="container" style="margin-left: 270px;">
    <br>
    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default" style="border-color: #234d20; border-style: solid; border-width: 1px; padding-bottom: 10px;">
        <div class="panel-heading" style="background-color: #234d20; color: white; font-size: 20px; padding-left:20px;"><p style="color: white; font-size: 15px;">Add Journal</p></div>


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
          <a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal" data-target="#modalPDFForm">Upload PDF File</a>
        </div>
    {!! Form::open(array('route' => 'journalCRUD.store','method'=>'POST')) !!}
            <div class="row">
                <br>

                <div class="col-md-9">
                    <div class="form-group">
                        <label style="color: black;">PDF URL:</label>

                        <input class="form-control" name= "pdf_url" type="text" value="{{ session()->get('pdf_url') }}">
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="form-group">
                        <label style="color: black;">Title:</label>
                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        <label style="color: black;">Author/s:</label>
                        {!! Form::text('author', null, array('placeholder' => 'Author/s (separate with comma if there are more than one author)','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="form-group">
                        <label style="color: black;">Date Published:</label>
                        {!! Form::text('date', null, array('Placeholder' => 'YYYY-MM-DD','class' => 'form-control')) !!}
                    </div>
                </div>


                <div class="col-md-9">
                    <div class="form-group">
                        <label style="color: black;">Abstract:</label>
                        {!! Form::text('abstract', null, array('Placeholder' => 'Abstract [can be empty]','class' => 'form-control')) !!}
                    </div>
                </div>

                <!-- <div class="col-md-9">
                    <div class="form-group">
                        <strong>Regional Office: </strong>
                        {!! Form::select('office', array('National Capital Region' => 'National Capital Region','Region I' => 'Region I', 'Region II' => 'Region II', 'Region III' => 'Region III', 'Region IV' => 'Region IV', 'Region V' => 'Region V', 'Region VI' => 'Region VI', 'Region VII' => 'Region VII', 'Region VIII' => 'Region VIII', 'Region IX' => 'Region IX', 'Region X' => 'Region X', 'Region XI' => 'Region XI', 'Region XII' => 'Region XII', 'Region XIII' => 'Region XIII', 'Region XIV' => 'Region XIV')) !!}
                    </div>
                </div> -->
                <div class="col-md-9">
                    <div class="form-group">
                        <label style="color: black;">Field/s: </label>
                            <br><label>{{ Form::checkbox('aquaculture', 'yes', false) }} Aquaculture</label><br>
                            <label>{{ Form::checkbox('a_business', 'yes', false) }} Agricultural Business</label><br>
                            <label>{{ Form::checkbox('a_econ', 'yes', false) }} Agricultural Economics</label><br>
                            <label>{{ Form::checkbox('a_equipment', 'yes', false) }} Agricultural Equipment</label><br>
                            <label>{{ Form::checkbox('a_mgt', 'yes', false) }} Agricultural Management</label><br>
                            <label>{{ Form::checkbox('agronomy', 'yes', false) }} Agronomy</label><br>
                            <label>{{ Form::checkbox('animal_husbandry', 'yes', false) }} Animal Husbandry</label><br>
                            <label>{{ Form::checkbox('crop_prod', 'yes', false) }} Crop Production</label><br>
                            <label>{{ Form::checkbox('food_sci', 'yes', false) }} Food Science</label><br>
                            <label>{{ Form::checkbox('forestry', 'yes', false) }} Forestry</label><br>
                            <label>{{ Form::checkbox('horticulture', 'yes', false) }} Horticulture</label><br>
                            <label>{{ Form::checkbox('soil_sci', 'yes', false) }} Soil Science</label><br>
                            <label>{{ Form::checkbox('vet_sci', 'yes', false) }} Veterinary Science</label>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center" >
                        <a class="btn btn-danger" href="{{ route('journalCRUD.index') }}"> Back</a>
                        <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
    {!! Form::close() !!}
    </div>
    
</div>
</div>
</div>


@endsection