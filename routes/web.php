<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});

Auth::routes();

Route::get('registerStore','PostController@index' );
Route::get('whoWeAre','PostController@indexWhoWeAre' );
Route::get('faqs','PostController@faqs' );

//Route::get('post/create', 'PostController@create');
//
//Route::post('post', 'PostController@store');
