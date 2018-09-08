@extends('template')

@section('content')
    <div class="table-success" style="text-align: center; font-size: 20px; padding-left: 100px; padding-right: 100px">
        <h1 style="color: darkslategray;" >{{ $page->title }}</h1>
        <p style="color: darkolivegreen;" >{{ $page->content }}</p>
    </div>
@endsection
