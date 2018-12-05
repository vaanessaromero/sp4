<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('pageTitle') {{ isset($pageTitle) ? $pageTitle : "" }} | Journals Library</title>
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" />
		@yield('styles')
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}" />
		@yield('template')
		<script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.1.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		@yield('scripts')
		<script type="text/javascript" src="{{ asset('assets/js/inspinia.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/site.js') }}"></script>
	</body>
</html>