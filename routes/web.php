<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});

Auth::routes();

//Route::get('post/create', 'PostController@create');
//
//Route::post('post', 'PostController@store');
