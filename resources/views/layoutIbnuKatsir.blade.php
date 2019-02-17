<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <a href="{{ url('/') }}">Main Page</a>
    <a href="{{ url('ibnuKatsir/create') }}">Input Data</a>
    <a href="{{ url('ibnuKatsir') }}">Dashboard</a></br></br>
    @yield('content')
</body>
</html>