<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home | Journals Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
              background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://res.cloudinary.com/dzhe5doam/image/upload/v1557200962/green_books.png");

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
            .carousel-inner img {
              width: 100%;
              height: 100%;
            }

            /*.carousel {
                position: relative;
                box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
                margin-top: 26px;
            }

            .carousel-inner {
                position: relative;
                overflow: hidden;
                width: 100%;
            }

            .carousel-open:checked + .carousel-item {
                position: static;
                opacity: 100;
            }

            .carousel-item {
                position: absolute;
                opacity: 0;
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }

            .carousel-item img {
                display: block;
                height: auto;
                max-width: 100%;
            }

            .carousel-control {
                background: rgba(0, 0, 0, 0.28);
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                display: none;
                font-size: 40px;
                height: 40px;
                line-height: 35px;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(0, -50%);
                cursor: pointer;
                -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
                text-align: center;
                width: 40px;
                z-index: 10;
            }

            .carousel-control.prev {
                left: 2%;
            }

            .carousel-control.next {
                right: 2%;
            }

            .carousel-control:hover {
                background: rgba(0, 0, 0, 0.8);
                color: #aaaaaa;
            }

            #carousel-1:checked ~ .control-1,
            #carousel-2:checked ~ .control-2,
            #carousel-3:checked ~ .control-3 {
                display: block;
            }

            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }

            .carousel-indicators li {
                display: inline-block;
                margin: 0 5px;
            }

            .carousel-bullet {
                color: #fff;
                cursor: pointer;
                display: block;
                font-size: 35px;
            }

            .carousel-bullet:hover {
                color: #aaaaaa;
            }

            #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #428bca;
            }

            #title {
                width: 100%;
                position: absolute;
                padding: 0px;
                margin: 0px auto;
                text-align: center;
                font-size: 27px;
                color: rgba(255, 255, 255, 1);
                font-family: 'Open Sans', sans-serif;
                z-index: 9999;
                text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
            }*/
        </style>
    </head>
    <body style="background-color:  white;">
        <nav class="navbar navbar-default navbar-fixed-top" style="height: 10px; position: fixed; width: 100%; background-color:  #77ab59">
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
                <img alt="Brand" style="width: 30px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200954/search_logo_white.png') }}">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li><a style="color: white;" href="#">.</a></li>
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
                            <li><a style="color: white;" href="{{ url('/admin/home') }}">ADMIN DASHBOARD</a></li>
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
            <center><img style="width: 120px; float: center; margin-top: 15px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200952/search_1_logo.png') }}"></center>
            <br><p align="center" style="color: black">SEARCH ALMOST EVERYTHING</p>
            <br><p>search by keyword</p>
            <form id="elasticScout" action="/searchresults/keyword" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="keyword_search" class="form-control" placeholder="enter keyword">
                 </div>
            </form>
            <br><br><br><p>search by title</p>
            <form id="elasticScout" action="/searchresults/title" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="title_search" class="form-control" placeholder="enter title">
                 </div>
            </form>
            <br><br><br><p>search by author</p>
            <form id="elasticScout" action="/searchresults/author" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="author_search" class="form-control" placeholder="enter author">
                 </div>
            </form>
            <!-- <br><br><br><p>search by subject field</p>
            <form id="elasticScout" action="/searchresults/subject" method="get">
                <div class="mysearchbar" style="width: 90%; float: right;">
                     <input name="subject_search" class="form-control" placeholder="enter subject field">
                 </div>
            </form> -->
            <br><br><br><a href="/regions" style="color: #234d20;">View by region</a><br>
            <br><a href="/subjects" style="color: #234d20;">View by subject field</a><br>
            <br><a href="/searchresults" style="color: #234d20;">View all journals by title</a><br><br>
        </div>

        <div class="container-fluid" id="cont_bottom" style="background-color: white;">
            <!-- //////////////// -->
            <!-- <div class="carousel">
              <div class="carousel-inner">
                  <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                  <div class="carousel-item">
                      <img src="http://fakeimg.pl/2000x800/0079D8/fff/?text=Without">
                  </div>
                  <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                  <div class="carousel-item">
                      <img src="http://fakeimg.pl/2000x800/DA5930/fff/?text=JavaScript">
                  </div>
                  <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                  <div class="carousel-item">
                      <img src="http://fakeimg.pl/2000x800/F90/fff/?text=Carousel">
                  </div>
                  <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                  <label for="carousel-2" class="carousel-control next control-1">›</label>
                  <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                  <label for="carousel-3" class="carousel-control next control-2">›</label>
                  <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                  <label for="carousel-1" class="carousel-control next control-3">›</label>
                  <ol class="carousel-indicators">
                      <li>
                          <label for="carousel-1" class="carousel-bullet">•</label>
                      </li>
                      <li>
                          <label for="carousel-2" class="carousel-bullet">•</label>
                      </li>
                      <li>
                          <label for="carousel-3" class="carousel-bullet">•</label>
                      </li>
                  </ol>
              </div>
 -->
            @php
              $slider = DB::table('journals')->latest()->limit(3)->get();
            @endphp
            <br><p align="center" style="color: black">NEW JOURNALS!</p>
            <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://res.cloudinary.com/dzhe5doam/image/upload/v1557211013/Essential-Books.jpg" alt="one" style="width:1100px; height:300px;">
                  <div class="carousel-caption">
                    <h3>{{$slider[0]->title}}</h3>
                    <p>by {{$slider[0]->author}}</p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="https://res.cloudinary.com/dzhe5doam/image/upload/v1557211013/methode_times_prod_web_bin_7b776858-57aa-11e9-b872-7488e2315159.jpg" alt="two" style="width:1100px; height:300px;">
                  <div class="carousel-caption">
                    <h3>{{$slider[1]->title}}</h3>
                    <p>by {{$slider[1]->author}}</p>
                  </div>   
                </div>
                <div class="carousel-item">
                  <img src="https://res.cloudinary.com/dzhe5doam/image/upload/v1557211015/IF-AD605_BOOKS__P_20180706170753.jpg" alt="three" style="width:1100px; height:300px;">
                  <div class="carousel-caption">
                    <h3>{{$slider[2]->title}}</h3>
                    <p>by {{$slider[2]->author}}</p>
                  </div>   
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <br>

          
            <!-- ////////// -->
        </div>

        <div class="container-fluid" id="cont_top" align="center">
            <center><img style="width: 120px; float: center; margin-top: 15px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200953/search_2_logo_white.png') }}"></center>
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

        

        <br><br><br>
        <div class="container-fluid"></div>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </body>
</html>
