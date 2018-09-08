@extends('admin.template')

@section('content')
    <hr>
    <h4>Admin page. Biography</h4>
    <div class="nav-tabs bg-dark">
        <a class="navbar-dark font-italic"  href="/admin">Перейти к редактирование главной страницы</a><br>
        <a class="navbar-dark font-italic"  href="/admin/books">Перейти к редактирование книг</a>
    </div>

    <hr>
    <h5>Редактирование биографии</h5>
    <hr>
    @if(Auth::check())
    <form action="/admin/saveB" method="post">
        @csrf
        <div>
            <div>
                <label><h5>Текст биографии</h5></label>
            </div>
            <p>Заголовок</p>
            <textarea name="title">{{old('title', $page->title)}}</textarea>
            <p>Текст</p>
            <textarea cols="60" rows="5" name="content">{{old('content', $page->content)}}</textarea>
        </div>
        <button class="btn-info shadow">Сохранить</button>
    </form>
    @endif
@endsection
