<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Page;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UpdateController
 * @package App\Http\Controllers\Admin
 */
class AddBookController extends Controller
{

    public function add(Request $request)
    {
        $this->validate($request, [
            'book' => 'required',
            'year' => 'required|date_format:"Y"',
            'image' => 'mimes:jpeg,jpg|dimensions:min_width=1000, min_height=1000'
        ], [
            'book.required' => 'Название книги не задано',
            'year.required' => 'Год издания книги не задан',
            'year.date_format' => 'Укажите год в формате YYYY'
        ]);


        $book = new Book();
        $book->book = $request->get('book');
        $book->year = $request->get('year');
        $book->alias = date('Y-m-d_His');
        $book->img = 'images/books/' . $book->alias . '.jpg';

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image->move(public_path() . '/images/books/',  $book->alias . '.jpg');
        }

        $book->save();

        return back()->with('message', 'Запись добавлена');
    }
}
