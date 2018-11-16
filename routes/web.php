<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function (){
    return view('home');
});

Auth::routes();

Route::get('registerStore','viewsController@index' );

Route::get('whoWeAre','viewsController@indexWhoWeAre' );

Route::get('faqs','viewsController@faqs' );

Route::get('/logout', 'Auth\LoginController@logout');
