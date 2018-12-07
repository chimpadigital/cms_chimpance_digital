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

Route::get('/','IndexController@index')->name('index');

Route::get('/catalogos','IndexController@catalogue')->name('catalogo');

Route::get('/extranet',function(){
	return view('extranet');
})->name('extranet');

Route::get('/contacto',function(){
	return view('contacto');
})->name('contacto');

Route::post('/contacto','IndexController@contact');

Route::middleware(['auth'])->group(function () {

//Novedades


Route::get('/novedades-show', 'NewsController@show')->name('news-show');

Route::get('/novedades-create', 'NewsController@create')->name('news-create');

Route::post('/novedades-save', 'NewsController@store')->name('news-store');

Route::post('/novedades-delete', 'NewsController@destroy')->name('news-destroy');

Route::post('/novedades-orden', 'NewsController@order')->name('news-order');


//Productos


Route::get('/productos-show', 'ProductController@show')->name('product-show');

Route::get('/productos-create', 'ProductController@create')->name('product-create');

Route::post('/productos-save', 'ProductController@store')->name('product-store');

Route::post('/productos-delete', 'ProductController@destroy')->name('product-destroy');

Route::post('/productos-orden', 'ProductController@order')->name('product-order');

Route::get('/home',  function () {
    return redirect()->route('news-show');
})->name('home');

//Catalogos

Route::get('/catalogo-show', 'CatalogueController@show')->name('catalogue-show');

Route::get('/catalogo-create', 'CatalogueController@create')->name('catalogue-create');

Route::post('/catalogo-save', 'CatalogueController@store')->name('catalogue-store');

Route::post('/catalogo-delete', 'CatalogueController@destroy')->name('catalogue-destroy');

Route::post('/catalogo-orden', 'CatalogueController@order')->name('catalogue-order');

Route::post('/catalogo-editar', 'CatalogueController@edit')->name('catalogue-edit');

Route::post('/catalogo-actualizar', 'CatalogueController@update')->name('catalogue-update');

});

Auth::routes();
