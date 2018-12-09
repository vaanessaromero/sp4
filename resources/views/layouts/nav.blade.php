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
                <img alt="Brand" style="width: 30px;" src="{{ asset('assets/img/search_logo.png') }}">
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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </body>
</html>
