<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
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
    <div>
        @if(Session::has('message'))
            <hr>
            <div class="alert alert-success">
                <ul><li>{{ Session::get('message') }}</li></ul>
            </div>
            <hr>
        @endif
        @if ($errors->any())
            <hr>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <hr>
        @endif
        @yield('content')
    </div>
    <hr>
    <div class="card-footer bg-info shadow" style="color: white">
        <footer style="vertical-align: middle; ">
            <div style="color: white; margin-left: 30px">
                Дата: {{ date('d-m-Y' ) }}
            </div>
        </footer>
    </div>
</body>
</html>
