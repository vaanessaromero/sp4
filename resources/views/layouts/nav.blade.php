<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Journals Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            /* The sidebar menu */
          .sidenav {
            height: 100%; /* Full-height: remove this if you want "auto" height */
            width: 350px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #ffffff; 
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 20px;
          }

          /* The navigation menu links */
          .sidenav a {
            text-decoration: none;
            font-size: 11px;
            color: #818181;
          }

          /* When you mouse over the navigation links, change their color */
          .sidenav a:hover {
            color: #f1f1f1;
          }

          /* Style page content */
          .main {
            margin-left: 160px; /* Same as the width of the sidebar */
            padding: 0px 10px;
          }

          /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
        </style>
    </head>

    <body style="background-color: white;">
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
                <img alt="Brand" style="width: 30px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200954/search_logo_white.png') }}">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
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

        <nav class="navbar navbar-default navbar-fixed-left" style="position: fixed; margin-left:-15px; margin-top: 10px; width: 25%; height: 100%; background-color: #ffffff">
          <br><br><br>
          <div class="container-fluid" id="cont_left" >
              <center><img style="width: 90px; float: center;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200952/search_1_logo.png') }}"></center>
              
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
        </nav>

        
        <div class="container-fluid" style="width:75%;">
          @yield('content')
        </div>

        <!-- =================END NAV BAR===================== -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </body>
</html>
