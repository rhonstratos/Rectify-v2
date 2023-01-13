<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('title')
	<x-include.heads />
</head>

<body>
	<div id="navbar_header">
		<x-client.navbar />
	</div>

	<div id="content">
		@yield('content')
	</div>

	<x-include.feet />
</body>

</html>
