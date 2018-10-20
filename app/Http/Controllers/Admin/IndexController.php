<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Http\Controllers\Controller;

/**
 * Class IndexController
 * @package App\Http\Controllers\Admin
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = Page::byAlias('index');

        $image = public_path('images/header.jpg');

        //dd($image); //хэлпер дебага в ларавел
        return view('admin.index', ['page' => $page, 'image' => $image ?? null]);
    }

}
