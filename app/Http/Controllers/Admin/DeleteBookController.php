<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;

/**
 * Class UpdateController
 * @package App\Http\Controllers\Admin
 */
class DeleteBookController extends Controller
{

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete()
    {
        $book = Book::byId($_POST['del']);

        $path = public_path() . '/' . $book->img;

        \File::delete($path);

        $book->delete();

        return back()->with('message', 'Запись удалена');
    }
}
