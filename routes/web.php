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


/* --- Lecture 4: Routes --- */
	// Route::get('/contact', function () {
	// 	return "Contact Here ....";
	// });

	// Route::get('/post/{id}/{name}', function ($id, $name) {
	// 	return "This Post Number: ".$id. " ".$name;
	// });

	// // Naming Routes
	// Route::get('/admin/posts/example', array('as'=>'admin.home', function () {
	// 	$url = route('admin.home');
	// 	return "Url is: ".$url;
	// }));
/* --- Lecture 4: Routes End--- */

/* --- Lecture 5: Controllers --- */
	////Route::get('/post/{id}','postsController@index');
	Route::resource('posts','PostsController');
/* --- Lecture 5: Controllers End --- */