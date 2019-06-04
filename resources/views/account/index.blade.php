<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой Аккаунт</title>
</head>
<body>
<h2>Добро пожаловать, {{ \Auth::user()->email }}</h2>
@if(\Auth::user()->isAdmin == 1)
    <a href="{{ route('admin') }}">Панель управление сайтом</a>
@endif
<br>
<br>
<a href="{{ route('logout') }}">Выйти</a>
</body>
</html>