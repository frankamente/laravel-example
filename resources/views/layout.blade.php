<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<ul class="menu">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">Acerca de</a></li>
    <li><a href="{{ route('blog.index') }}">Blog</a></li>
</ul>
<div id="app">
    @yield('content')
</div>
</body>
</html>
