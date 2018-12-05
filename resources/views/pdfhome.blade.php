@extends('layouts.app')

<!-- layouts.admin -->
 
@section('content')

<div class="container" style="width:800px; margin:0 auto;">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-8 col-md-offset-2">


            <div class="panel panel-default" align="center" style="width: 30%;padding-top: 10px; padding-bottom: 20px;border-radius: 10px;background-color: #9c1a04;width:800px; margin:0 auto;">
                <div class="container" style="">
                    <div class="panel-heading">
                        <p style="font-size: 20px; color: white;"><strong>Upload PDF File</strong></p>
                    </div>
                    <div class="panel-body">
                        <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('uploadPDF')  }}">
                            {{ csrf_field() }}

                            @if(session()->has('status'))
                              <div class="alert alert-info" role="alert">
                                {{session()->get('status')}}
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
            <br>
        </div>
    </div>
</div>

<!-- <div class="container" style="margin-top: 100px;">
   <div class="row">
       <h4 class="text-center">
           Upload PDF
       </h4>
       <br>
       <div class="row">
           <div id="formWrapper">
               <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('uploadPDF')  }}">
                   {{csrf_field()}}
                   @if(session()->has('status'))
                       <div class="alert alert-info" role="alert">
                           {{session()->get('status')}}
                       </div>
                   @endif
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                       <input type="file" name="pdf_name" class="form-control" id="name" value="">
                       @if($errors->has('pdf_name'))
                           <span class="help-block">{{ $errors->first('pdf_name') }}</span>
                       @endif
                   </div>

                   <div class="form-group">
                       <button type="submit" class="btn btn-success">Upload PDF </button>
                   </div>
               </form>

           </div>
       </div>
   </div>

   <div class="row" id="displayImages">
       @if($pdfs)
           @foreach($pdfs as $pdf)

               <div class="col-md-3">
                   <a href="{{$pdf->pdf_url}}" target="_blank">
                       <img src="{{asset('uploads/'.$pdf->pdf_name)}}" class="img-responsive" alt="{{$pdf->pdf_name}}">
                   </a>
               </div>
           @endforeach
       @endif
   </div>
</div>
 -->

@endsection