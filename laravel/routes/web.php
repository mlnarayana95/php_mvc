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

Route::delete('/admin/vid_collection/{id}', 'Admin\AdminVidCollectionController@destroy')->middleware('auth');

Route::put('/admin/vid_collection/{id}', 'Admin\AdminVidCollectionController@update')->middleware('auth');

Route::get('/admin/vid_collection/{id}/edit', 'Admin\AdminVidCollectionController@edit')->middleware('auth');



Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');


