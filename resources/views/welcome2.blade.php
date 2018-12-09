<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home | Journals Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .title {
                font-size: 60px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .h_image {
              /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
              background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets/img/green_books.png");

              /* Set a specific height */
              height: 30%;

              /* Position and center the image to scale nicely on all screens */
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              position: relative;
              margin-top: 50px;
            }

            /* Place text in the middle of the image */
            .h-text {
              text-align: center;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              color: white;
            }

            .container-fluid{
                border-radius: 5px;
            }

            #cont_left{
                background-color:  white;;
                border-width: 2px;
                color: black;
                border-style: solid;
                border-color: #77ab59;
                width: 30%;
                float: left;
                margin-top: 20px;
                margin-left: 20px;
                margin-bottom: 20px;
            }

            #cont_top{
                background-color:   #77ab59;
                color: white;
                width: 65%;
                float: left;
                margin-top: 20px;
                margin-left: 20px;
            }

            a,h1,p {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            #cont_bottom{
                background-color:   #77ab59;
                color: white;
                width: 65%;
                float: left;
                margin-top: 20px;
                margin-left: 20px;
            }
        </style>
    </head>
    <body style="background-color:  white;">
        <nav class="navbar navbar-default navbar-fixed-top" style="position: fixed; width: 100%; background-color:  #77ab59">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">
                <img alt="Brand" style="width: 30px;" src="{{ asset('assets/img/search_logo_white.png') }}">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a style="color: white;" href="#">Link</a></li>
              </ul>
              <form class="navbar-form navbar-left" id="elasticScout" action="/SearchQuery" method="get">
                <div class="form-group">
                  <input name="search" class="form-control" placeholder="Quick Search">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right" style="color: white;">
                @if (Route::has('login'))
                    @auth
                        @if ($user->access_level == 0)
                            <li><a style="color: white;" href="{{ url('/admin/home') }}">DASHBOARD</a></li>
                        @else
                            <li><a style="color: white;" href="{{ url('/home') }}">DASHBOARD</a></li>
                        @endif
                    @else
                        <li><a style="color: white;" href="{{ route('login') }}">Login</a></li>
                        <li><a style="color: white;" href="{{ route('register') }}">Register</a></li>
                    @endauth
            @endif
              </ul>
            </div>
          </div>
        </nav>

        <!-- =================END NAV BAR===================== -->

        <div class="h_image">
          <div class="h-text">
            <h1>JOURNALS LIBRARY</h1>
          </div>
        </div>

        <div class="container-fluid" id="cont_left" >
            <center><img style="width: 120px; float: center; margin-top: 15px;" src="{{ asset('assets/img/search_1_logo.png') }}"></center>
            <br><p align="center" style="color: black">SEARCH ALMOST EVERYTHING</p>
            <br><p>search by keyword</p>
            <form id="elasticScout" action="/SearchQuery" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="search" class="form-control" placeholder="enter keyword">
                 </div>
            </form>
            <br><br><br><p>search by title</p>
            <form id="elasticScout" action="/SearchQuery" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="search" class="form-control" placeholder="enter keyword">
                 </div>
            </form>
            <br><br><br><p>search by author</p>
            <form id="elasticScout" action="/SearchQuery" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="search" class="form-control" placeholder="enter keyword">
                 </div>
            </form>
            <br><br><br><p>search by subject field</p>
            <form id="elasticScout" action="/SearchQuery" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="search" class="form-control" placeholder="enter keyword">
                 </div>
            </form>
            <br><br><br><a href="/authors" style="color: #234d20;">View all authors</a><br>
            <br><a href="/subjects" style="color: #234d20;">View all subject fields</a><br>
            <br><a href="/searchresults" style="color: #234d20;">View all journals by title</a><br>
            <br><a href="/" style="color: #234d20;">Search through authors</a><br>
            <br><a href="/" style="color: #234d20;">Search through subject fields</a><br>
            <br><a href="/" style="color: #234d20;">search through regions</a><br>
            <br><a href="/" style="color: #234d20;">search through title</a><br>
            <br><a href="/" style="color: #234d20;">search through keywords</a><br><br>
        </div>

        <div class="container-fluid" id="cont_top" align="center">
            <center><img style="width: 120px; float: center; margin-top: 15px;" src="{{ asset('assets/img/search_2_logo_white.png') }}"></center>
            <br><p style="color: white">EXACTLY SEARCH FOR</p><br>
            <form id="elasticScout" action="/searchresults" method="get">
                <div class="mysearchbar" style="width: 90%;">
                     <input name="search_e_title" class="form-control" placeholder="Enter title"><br>
                     <input name="search_e_author" class="form-control" placeholder="Enter author/s"><br>
                     <input name="search_e_subject_field" class="form-control" placeholder="Enter subject field/s"><br>
                     <input name="search_e_date_published" class="form-control" placeholder="Enter publishing date"><br>
                 </div>
                 <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <br>
        </div>

        <div class="container-fluid" id="cont_bottom">
            <p>SEARCH ALMOST EVERYTHING</p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec est eget nibh commodo tristique nec eu urna. Phasellus accumsan vel sem vitae volutpat. Quisque sollicitudin facilisis ornare. Suspendisse rhoncus lorem quis tortor efficitur semper. Integer ullamcorper neque nec nibh ultrices mollis. Duis semper enim ligula, a imperdiet nibh condimentum vel. Ut congue nec nunc et pharetra. In hac habitasse platea dictumst. Aenean malesuada ex dui. Fusce euismod pharetra sollicitudin. Nulla erat massa, egestas quis feugiat eget, laoreet sed dui. Donec ut viverra lacus, eu placerat massa. Donec pulvinar magna vel consequat iaculis.

            Nam viverra ac ipsum a tristique. Mauris sit amet tortor rutrum, malesuada tortor a, fermentum nunc. Pellentesque placerat vulputate purus ut tincidunt. Nulla ac fermentum mauris. Vivamus auctor pharetra leo, posuere auctor nibh pulvinar non. Nullam dignissim, odio et imperdiet lacinia, ex mi tincidunt ipsum, sed commodo elit nisi et elit. Nunc non porta nulla.

            Donec enim arcu, aliquam in vulputate in, commodo eget augue. Vestibulum libero elit, ornare a magna sed, imperdiet pulvinar urna. Suspendisse laoreet elementum tempor. Donec non magna tortor. Nulla suscipit lacus tincidunt orci volutpat, vel euismod ante bibendum. Integer ac nibh nulla. Donec vel rutrum urna. Aliquam feugiat feugiat risus nec consequat. Vivamus non nunc euismod, placerat ligula in, aliquet nibh. Nulla facilisi. Aliquam consectetur consequat consequat. Vestibulum tincidunt facilisis lectus, ac rhoncus augue tristique vel. Duis ac est tincidunt ligula consequat efficitur. Donec tempor quis sem in porta. In dignissim aliquet sagittis. Aliquam sed ipsum sit amet lorem molestie maximus eu eu ligula.
        </div>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </body>
</html>
