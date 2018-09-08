<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Page;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class BiographyController
 * @package App\Http\Controllers\Admin
 */
class BooksController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = Page::byAlias('books');
        $books = Book::all('book', 'year', 'img', 'alias', 'id');

        //dd($books);

        //dd($image); //хэлпер дебага в ларавел
        return view('admin.books', ['page' => $page, 'books' => $books]);
    }

}
