<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class BiographyController
 * @package App\Http\Controllers\Admin
 */
class BiographyController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $page = Page::byAlias('biography');

        //dd($image); //хэлпер дебага в ларавел
        return view('admin.biography', ['page' => $page]);
    }

}
