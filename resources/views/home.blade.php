<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Home Page</title>
</head>
<body>
    <h1>Laravel 8 Home Page</h1>
    <a href="{{ url('') }}">Default</a>
    <a href="{{ url('home') }}">Home</a>
    <a href="{{ url('about') }}">About</a>
</body>
</html>