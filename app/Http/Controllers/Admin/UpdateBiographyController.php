<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UpdateBiographyController
 * @package App\Http\Controllers\Admin
 */
class UpdateBiographyController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'content' => 'required'
        ], [
            'title.required' => 'Заголовок не задан',
            'content.required' => 'Текст биографии не задан'
        ]);

        $page = Page::byAlias('biography');
        $page->title = $request->get('title');
        $page->content = $request->get('content');
        $page->save();

        return back()->with('message', 'Изменения сохранены');
    }
}
