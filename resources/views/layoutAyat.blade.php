<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <a href="{{ url('/') }}">Main Page</a>
    <a href="{{ url('dataTafsir/create') }}">Input Data</a>
    <a href="{{ url('dataTafsir') }}">Dashboard</a></br></br>
    @yield('content')
</body>
</html>