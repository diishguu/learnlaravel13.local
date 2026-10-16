<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return '!!!';
});

Route::get('/', function () {
    return 'about page';
});

Route::get('/', function ($id) {
    return 'Номер страницы' . $id;
});

Route::get('/about/{catId}/{mouseId}', function ($catId, $mouseId) {
    return 'кошка' . $catId . 'мышка' . $mouseId;
});

Route::get('/post/{id}', function ($id) {
    return 'post' . $id;
}) -> where('id', '[0-9]+');


Route::get('/post/{slug}/{id}', function ($id, $slug) {
    return 'post' . $slug . 'id' . $id;
}) -> where('id', '[0-9]+')
    -> where('slug', '[a-z]+');

Route::get('/post/{id}', function ($id) {
    return 'id' . $id;
}) -> whereNumber('id');

Route::get('/post/{id}', function ($slug) {
    return 'id' . $slug;
}) -> whereAlpha('slug')
;
Route::get('/post/{order}', function ($order) {
    return 'id' . $order;
}) -> whereIn('order', ['name', 'surname']);
