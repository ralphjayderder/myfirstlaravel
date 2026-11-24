<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Laravel App</title>
</head>
<body>
    <h1>Welcome to My First Laravel App</h1>
    <a href="{{ route('home') }}">home</a>
    <a href="{{ route('contact')}}">contact</a>
    <a href="{{ route('test') }}">test</a>
    <p>Developed: Ralph Derder<p>
</body>
</html>