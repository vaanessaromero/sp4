@extends('layouts.main')

@section('styles')
	<!--<link rel="stylesheet" href="{{ asset('assets/css/plugins/datapicker/datepicker3.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/plugins/daterangepicker/daterangepicker-bs3.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/plugins/dataTables/datatables.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/typeahead.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/plugins/ladda/ladda-themeless.min.css') }}" /> 
	<link rel="stylesheet" href="{{ asset('assets/css/plugins/sweetalert/sweetalert.css') }}" />-->
@endsection

@section('template')

	</head>
	
	<body>

		<div class="pace-done">
			<div id="wrapper">
			
				<nav class="navbar-default navbar-static-side" role="navigation">
				   <div class="sidebar-collapse">
					  <ul class="nav metismenu" id="side-menu">
						 <li class="nav-header">
							<div class="dropdown profile-element mt-10-neg">
							   <img class="c-logo align-left" style="width: 160px;" src="{{ asset('https://res.cloudinary.com/dzhe5doam/image/upload/v1557200954/user_logo.png') }}">
							</div>
							<div class="logo-element">
							   JL
							</div>
						 </li>
						<li class="">
							<a href="{{ url('journalCRUD') }}"><i class="fa fa fa-list-alt"></i> <span class="nav-label">Manage Journals</span></a>
						 </li>
						 <li class="">
							<a href="{{ url('subjectCRUD') }}"><i class="fa fa fa-list-alt"></i> <span class="nav-label">Manage Subject Fields</span></a>
						 </li>
						 <li class="">
							<a href="{{ url('search') }}"><i class="fa fa fa-list-alt"></i> <span class="nav-label">Search</span></a>
						 </li>
		
						 <li class="">
							<a href="#"><i class="fa fa fa-gears"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
							   <li>
							   		<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
	                                 </a>

	                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                    {{ csrf_field() }}
	                                </form>
							   </li>
							</ul>
						 </li>
					  </ul>
				   </div>
				</nav>
				
				<div id="page-wrapper" class="gray-bg nav-page-header">
					<div class="row border-bottom">
					   <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
						  <div class="navbar-header">
							 <a class="navbar-minimalize minimalize-styl-2 btn btn-primary" style="background-color: RGB(201, 59, 45);"><i class="fa fa-bars"></i> </a>
						  </div>
						  <ul class="nav navbar-header">
							 <li class="welcome-li">
								<span class="m-r-sm text-muted welcome-message"><strong><a href="/home" style="color:gray">JOURNALS LIBRARY - MEMBER DASHBOARD</a></strong></span>
							 </li>
						  </ul>
						  <ul class="nav navbar-top-links navbar-right">
							 <li>
								 <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-off"></span>
                                    Logout
                                 </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
							 </li>
						  </ul>
					   </nav>
					</div>
					
					@yield('content')
					<br>
					<br>
					<br>
					<div class="footer">
					   <div class="col-md-6">
						  <strong>All Rights Reserved</strong>  &copy; 2018               
					   </div>
					</div>
					
					
				</div>
				
			</div>
		</div>
@endsection

@section('scripts')
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/pace/pace.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/toastr/toastr.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/sweetalert/sweetalert.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/ladda/spin.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/ladda/ladda.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/ladda/ladda.jquery.min.js') }}"></script>
	<!--<script  type="text/javascript" src="{{ asset('assets/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/fullcalendar/moment.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/plugins/dataTables/datatables.min.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/js/typeahead.bundle.js') }}"></script>
	<script  type="text/javascript" src="{{ asset('assets/lib/jsSHA/sha512.js') }}"></script>-->
	<script  type="text/javascript" src="{{ asset('assets/js/bootbox.js') }}"></script>
	
	
	
	
@endsection

