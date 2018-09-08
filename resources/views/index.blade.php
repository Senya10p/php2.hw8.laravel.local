@extends('template')

@section('content')

    @if (file_exists($image))
        <img src="{{ asset('images/header.jpg') }}" height="500px">
    @endif
    <div class="table-success" style="text-align: center; font-size: 25px; padding-left: 100px; padding-right: 100px">
        <h1 style="color: darkslategray;" >{{ $page->title }}</h1>
        <p style="color: darkolivegreen;" >{{ $page->content }}</p>
    </div>

@endsection
