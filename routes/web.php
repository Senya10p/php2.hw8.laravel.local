<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SiteController@index');
Route::get('/', 'SiteController@index');
Route::get('/biography', 'SiteController@biography');
Route::get('/books', 'SiteController@books');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

//Если нужно разрешить регистрацию других пользователей, тогда нужно ввести флаг для админа.

Route::match(['get', 'post'], 'register', function () { //при запросе register перебрасывает на главную страницу
    return redirect('/');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/biography', 'Admin\BiographyController@index');
    Route::get('/books', 'Admin\BooksController@index');
    Route::post('/save', 'Admin\UpdateController@update');
    Route::post('/saveB', 'Admin\UpdateBiographyController@update');
    Route::post('/update', 'Admin\UpdateBookController@update');
    Route::post('/del', 'Admin\DeleteBookController@delete');
    Route::post('/add', 'Admin\AddBookController@add');

});



