@extends('admin.template')

@section('content')
    <hr>
    <h4>Admin page. Books</h4>
    <div class="nav-tabs bg-dark">
        <a class="navbar-dark font-italic" href="/admin">Перейти к редактирование главной страницы</a><br>
        <a class="navbar-dark font-italic"  href="/admin/biography">Перейти к редактирование биографии</a>
    </div>

    <hr>
    <h5>Редактирование страницы с книгами</h5>
    <hr>
    @if(Auth::check())
        <div>
            <div>
                <label><h5>Книги</h5></label>
            </div>
            <table border="1">
                <th>Книга</th><th>Год</th><th>Обложка книги</th><th>Выбрать обложку книги</th><th>Жанр</th><th>Изменить жанр книги</th>
                @foreach ($books as $book)

                    <tr>
                        <form action="/admin/update" method="post" enctype="multipart/form-data">
                            @csrf
                            <td><input type="text" name="book" value="{{old('book', $book->book)}}"></td>
                            <td><input type="text" name="year" value="{{old('book', $book->year)}}"></td>
                            <td><img src="{{ asset($book->img) }}" height="35px"></td>
                            <td><input name="img" type="file"></td>
                            <td>{{ old('book', $book->category->name) }}</td>
                            <td>
                                <select name="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </td>

                            <td><button class="btn-info shadow" type="submit" name="update" value="{{ $book->id }}">Изменить</button></td>
                        </form>
                        <td>
                            <form action="/admin/del" method="post">
                                @csrf
                                <button class="btn-info shadow" type="submit" name="del" value="{{ $book->id }}">Удалить</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

            </table>

            <hr>
            <form action="/admin/add" method="post" enctype="multipart/form-data">
                @csrf
                <h5>Добавление записей</h5>
                <div>
                    <p>Обложка книги</p>
                    <div style="margin-top: 10px">
                        <input name="img" type="file">
                    </div>
                </div>
                <br>
                <p>
                    Книга: <input type="text" name="book">
                    Год: <input type="text" name="year">
                    Жанр:
                    <select name="category" >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </p>
                <button type="submit" name="add">Добавить</button>
            </form>
        </div>
    @endif
@endsection
