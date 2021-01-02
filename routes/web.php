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
Route::get('/Admin', function () {
    return view('login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/politik', 'HomeController@politik')->name('politik');
Route::get('/ekonomi', 'HomeController@ekonomi')->name('ekonomi');
Route::get('/teknologi', 'HomeController@teknologi')->name('teknologi');
Route::get('/olahraga', 'HomeController@olahraga')->name('olahraga');

Route::get('/articles/{id}', 'HomeController@getID');
Route::get('/about','AboutController@index')->name('about');


//Route::get('/tampil','HomeController''@index')->name('tampil');
Route::get('/tambah/add','HomeController@tampil');
Route::post('/tambah/create','HomeController@create');

Route::get('/edit/{id}','HomeController@edit');
Route::post('/proUp','HomeController@proUp');

Route::get('/tampil/delete/{id}','ArticleController@delete');



