<?php

/*
|--------------------------------------------------------------------------
| Non-Auth Routes - Public Access
|--------------------------------------------------------------------------
*/
Route::get('/', 'FrontController@home');
Route::get('/blog', 'FrontController@blog')->name('blog');

Route::get('/blog/{Slug}', 'FrontController@article')->name('blog.article');
Route::get('/speaker-tapes', 'FrontController@tapes')->name('speaker.tapes');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::post('contact-send', 'FrontController@send')->name('contact.send');

/*
|--------------------------------------------------------------------------
| Auth Routes - User Authentication Needed
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/dashboard', 'FrontController@dashboard')->name('dashboard');

/*
|--------------------------------------------------------------------------
| General Admin Page - Protected by admin middleware in AdminController
|--------------------------------------------------------------------------
*/
Route::get('/admin', 'AdminController@admin')->name('admin');

/*
|--------------------------------------------------------------------------
| Admin - Protected by admin middleware in PostController
|--------------------------------------------------------------------------
*/

/* Posts */
Route::prefix('admin')->group(function () {
    Route::get('/post/create-post', 'PostController@create')->name('post.create');
	Route::post('/post/post.store', 'PostController@store')->name('post.store');
	Route::get('/post/post-index', 'PostController@index')->name('post.index');
	Route::get('/post/edit/{id}', 'PostController@edit')->name('post.edit');
	Route::post('/post/update/{id}', 'PostController@update')->name('post.update');
	Route::get('/post/delete/{id}', 'PostController@destroy')->name('post.delete');
/* Tapes */
	Route::get('/tape/create-tape', 'TapeController@create')->name('tape.create');
	Route::post('/tape/tape.store', 'TapeController@store')->name('tape.store');
	Route::get('/tape/tape-index', 'TapeController@index')->name('tape.index');
	Route::get('/tape/edit/{id}', 'TapeController@edit')->name('tape.edit');
	Route::post('/tape/update/{id}', 'TapeController@update')->name('tape.update');
	Route::get('/tape/delete/{id}', 'TapeController@destroy')->name('tape.delete');
});


