<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UpdateController
 * @package App\Http\Controllers\Admin
 */
class UpdateController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,jpg|dimensions:min_width=1000, min_height=1000'
        ], [
            'title.required' => 'Заголовок не задан',
            'content.required' => 'Текст не задан',
            'image.mimes' => 'Изображение должно иметь тип jpeg, jpg',
            'image.dimensions' => 'Минимальная ширина и высота изображения должна быть 1000px'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->move(public_path() . '/images/','header.jpg');
        }

        $page = Page::byAlias('index');
        $page->title = $request->get('title');
        $page->content = $request->get('content');
        $page->save();

        return back()->with('message', 'Изменения сохранены');
    }
}
