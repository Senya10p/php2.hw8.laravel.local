@extends('admin.template')

@section('content')
    <hr>
    <h4>Admin page. Home</h4>
    <div class="nav-tabs bg-dark">
        <a class="navbar-dark font-italic"  href="/admin/biography">Перейти к редактирование биографии</a><br>
        <a class="navbar-dark font-italic"  href="/admin/books">Перейти к редактирование книг</a>
    </div>
    <hr>
    <h5>Редактирование главной страницы</h5>
    <hr>
    @if(Auth::check())
    <form action="/admin/save" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <div><label><h5>Фото главной страницы</h5></label></div>
                @if (file_exists($image))
                    <img src="{{ asset('images/header.jpg') }}" height="70px">
                @endif
                <div style="margin-top: 10px">
                    <input name="image" type="file">
                </div>
            </div>
            <hr>
            <div>
                <label><h5>Текст главной страницы</h5></label>
            </div>
            <p>Заголовок</p>
            <textarea name="title">{{old('title', $page->title)}}</textarea>
            <p>Текст</p>
            <textarea cols="60" rows="5" name="content">{{old('content', $page->content)}}</textarea>
        </div>
            <button class="btn-info shadow" >Сохранить</button>
    </form>
    @endif
@endsection
