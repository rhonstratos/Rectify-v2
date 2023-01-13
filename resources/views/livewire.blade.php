<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Livewire: Demo</title>
	<x-include.heads />
</head>

<body>
    <div>
        <h1>home</h1>
        <a href="{{url('/')}}">Back</a>
    </div>
    @livewire('counter')
	<x-include.feet />
</body>

</html>
