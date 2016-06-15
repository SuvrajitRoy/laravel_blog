<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('blog.index');
// });

 // Route::get('/', 'BlogController@index');

 
// Route::get('/hello', 'BlogController@index2');

// Route::get('/hello', function() {
// 	return view('blog.hello');
// });

// Route::get('/index', function() {
// 	return view('blog.index');
// });


  Route::controller('article', 'ArticleController');




// Route::get('/post', function() {
// 	return view('blog.create');
// });

//  Route::get('/',['as'=>'home','uses'=>'BlogController@index']);

//  Route::post('/store', 'BlogController@store');
//  Route::get('/edit/{id}', 'BlogController@edit');
//  Route::post('/update/{id}','BlogController@update');
//  Route::get('/destroy/{id}','BlogController@destroy');

//  Route::resource('blog', 'BlogController');


 Route::get('/admin',['as'=>'admin','uses'=>'BlogController@admin']);
