<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel from scratch</title>
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    
    @yield('header')
</head>
<body>
    
    @yield('content')


    @yield('footer')
</body>
</html>