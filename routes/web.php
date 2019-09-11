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


Route::get('meiju', function () {
    echo 'meiju';
});

Route::get('dianying', function () {
    echo 'dianying';
});

Route::get('meiju/{id}', function ($id) {
    echo $id;
});

Route::get('news', function () {
    echo 'news';
});

Route::get('news/{category}', function ($category) {
    echo 'news'. $category;
});

Route::get('news/{category}/{id}', function ($category, $id) {
    echo 'news' . $category . $id;
});