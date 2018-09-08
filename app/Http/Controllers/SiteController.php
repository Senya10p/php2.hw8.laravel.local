<?php

namespace App\Http\Controllers;

use App\Book;
use App\Page;
use App\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $page = Page::byAlias('index');
        $image = public_path('/images/header.jpg');

        return view('index', ['page' => $page, 'image' => $image ?? null]);
    }

    public function books()
    {
        $page = Page::byAlias('books');
        //$book = Book::byAlias('number');
        $books = Book::paginate(2);



        return view('books', ['page' => $page, 'books' => $books]);
    }

    public function biography()
    {
        $page = Page::byAlias('biography');

        return view('biography', ['page' => $page]);
    }
}
