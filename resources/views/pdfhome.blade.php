<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width">
   <title>Cloudinary PDF Upload</title>
   <meta name="description" content="Prego is a project management app built for learning purposes">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container" style="margin-top: 100px;">
   <div class="row">
       <h4 class="text-center">
           Upload PDF
       </h4>

       <div class="row">
           <div id="formWrapper" class="col-md-4 col-md-offset-4">
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
</body>
</html>