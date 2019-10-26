<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body style='bacground-color: lime ; color: lime ;'>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Conact us</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>