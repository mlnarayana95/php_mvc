<?php

Route::get('/', 'VidCollectionController@index');

Route::get('/home', 'VidCollectionController@index');

Route::get('/video/{id}','VidCollectionController@show');

Route::get('/tvshows', 'PagesController@tvshows');

Route::get('/movies', 'PagesController@movies');

Route::get('/myprofile', 'PagesController@myprofile');

Route::get('/home', 'HomeController@index')->name('home');


// Admin Routes

Route::get('/admin/vid_collection', 'Admin\AdminVidCollectionController@index')->middleware('auth');

Route::get('/admin/vid_collection/create', 'Admin\AdminVidCollectionController@create')->middleware('auth');

Route::post('/admin/vid_collection', 'Admin\AdminVidCollectionController@store')->middleware('auth');


Route::delete('/admin/vid_collection/{id}', 'Admin\AdminVidCollectionController@destroy')->middleware('auth');

Route::put('/admin/vid_collection/{id}', 'Admin\AdminVidCollectionController@update')->middleware('auth');

Route::get('/admin/vid_collection/{id}/edit', 'Admin\AdminVidCollectionController@edit')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/admin/vid_collection/message',function(){
	return redirect('/admin/vid_collection')->with('success', 'You have successfully logged in!');
 
})->middleware('auth');

Auth::routes();

