<?php

Route::get('/', 'VidCollectionController@index');

Route::get('/home', 'VidCollectionController@index');

Route::get('/video/{id}','VidCollectionController@show');

Route::get('/tvshows', 'PagesController@tvshows');

Route::get('/movies', 'PagesController@movies');

Route::get('/myprofile', 'PagesController@myprofile');

// Admin Routes

Route::get('/admin/home', 'Admin\AdminVidCollectionController@index');