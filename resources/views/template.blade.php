<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Пелевин</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div style="text-align: center; "><h1 style="color: cornflowerblue"></h1></div>
</header>
    <div class="nav nav-tabs bg-info shadow">
        <a class="nav-link bg-info font-italic" style="color: white" href="/">Главная страница</a>
        <a class="nav-link bg-info font-italic" style="color: white" href="/biography">Биография</a>
        <a class="nav-link bg-info font-italic" style="color: white" href="/books">Книги</a>

        @if(Auth::check())
            <a class="nav-link bg-info font-italic" style="color: white" href="/admin">Admin </a>
            <a class="nav-link bg-info font-italic" style="color: white" href="/logout">Logout</a>
        @endif
    </div>
    <div>@yield('content')</div>
    <div class="card-footer bg-info shadow" style="color: white">
        <footer style="vertical-align: middle; ">
            <div style="color: white; margin-left: 30px">
                Дата: {{ date('d-m-Y' ) }}
            </div>
        </footer>
    </div>
</body>
</html>
