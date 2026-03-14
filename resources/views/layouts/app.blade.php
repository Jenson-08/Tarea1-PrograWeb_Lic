<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CS Books')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<nav>
    <a href="{{ route('home') }}">HOME</a>
    <a href="{{ route('books.index') }}">BOOKS</a>
    <a href="{{ route('authors.index') }}">AUTHORS</a>
    <a href="{{ route('publishers.index') }}">PUBLISHERS</a>
</nav>

<main>
    @yield('content')
</main>

<footer>
     JENSON PEREZ GONZÁLEZ 
</footer>

</body>
</html>