<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Sign In | {{config('app.name')}}</title>
	<!-- Favicon-->
	<!-- <link rel="icon" href="../../favicon.ico" type="image/x-icon"> -->

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<link href="{{mix('/css/app.css')}}" rel="stylesheet">
</head>

<body class="login-page">

	@yield('content')

	<script src="{{asset('js/app.js')}}"></script>
	@yield('scripts')
</body>

</html>