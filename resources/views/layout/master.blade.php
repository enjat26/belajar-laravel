<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/blog">Blog</a>
    </nav>
    @yield('content')
</body>
<footer>copy &copy 2019</footer>
</html>

