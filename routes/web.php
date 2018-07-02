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

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/services', function () {
    return view('services');
})->name('Services');


Route::get('/blog', function () {
    return view('blog');
})->name('Blog');


Route::get('/blogpost', function () {
    return view('blog-post');
})->name('BlogPost');

Route::get('/contact', function () {
    return view('contact');
})->name('Contact');

Route::get('/elements', function () {
    return view('elements');
})->name('Elements');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

