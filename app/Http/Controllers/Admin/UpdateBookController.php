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
class UpdateBookController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'book' => 'required',
            'year' => 'required|date_format:"Y"',
            'image' => 'mimes:jpeg,jpg|dimensions:min_width=1000, min_height=1000'
        ], [
            'book.required' => 'Название книги не задано',
            'year.required' => 'Год издания книги не задан',
            'year.date_format' => 'Укажите год в формате YYYY',
            'image.mimes' => 'Изображение должно иметь тип jpeg, jpg',
            'image.dimensions' => 'Минимальная ширина и высота изображения должна быть 1000px'
        ]);


        $book = Book::byId($_POST['update']);
        $book->book = $request->get('book');
        $book->year = $request->get('year');
        $book->img = 'images/books/' . $book->alias . '.jpg';

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image->move(public_path() . '/images/books/',  $book->alias . '.jpg');
        }

        $book->save();

        return back()->with('message', 'Изменения сохранены');
    }
}
