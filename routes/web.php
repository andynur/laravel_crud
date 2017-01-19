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
    return view('welcome');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('tes', function () {
    $people = ['Andy', 'Budi', 'Arif', 'Ibnu'];

    return view('pages.tes', compact('people'));
});

Route::get('home', 'PagesController@home');
Route::get('mine', 'PagesController@mine');
Route::get('cards', 'CardsController@index');
