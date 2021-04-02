<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/new','NewController@index');

