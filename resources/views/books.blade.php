@extends('template')

@section('content')
    <hr>
    <div class="container bg-info align-middle shadow-lg" style="text-align: center;" >
        <h1 style="color: darkslategray;">Книги</h1>
        <table class="table">
            @foreach ($books as $book)
            <tr>
                <td><img src="{{ asset($book->img) }}" height="250px"></td>
                <td>
                    <div style="font-size: 50px"><h1 style="color: darkslategray;">Название: {{ $book->book }}</h1></div>
                    <div style="font-size: 50px"><h1 style="color: darkslategray;">Год публикации: {{ $book->year }}</h1></div>
                </td>
            </tr>
            @endforeach
        </table>
        <div>{{ $books->links() }}</div>
    </div>
    <hr>
@endsection
