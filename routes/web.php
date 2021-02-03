<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/posts','postcontroller@index')->name('posts.index');


Route::get('/posts/create', 'postcontroller@create')->name('posts.create');
Route::post('/posts','postcontroller@store')->name('posts.store');



Route::get('/posts/{post}/edit','postcontroller@edit')->name('posts.edit');
Route::put('/posts/{post}', 'postcontroller@update')->name('posts.update');
Route::delete('/posts/{post}','postcontroller@destroy')->name('posts.destroy');


Route::get('/posts/{post}', 'postcontroller@show')->name('posts.show');

















