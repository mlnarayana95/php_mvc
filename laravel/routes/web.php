<?php

Route::get('/', 'PagesController@home');

Route::get('/home', 'PagesController@home');

Route::get('/tvshows', 'PagesController@tvshows');

Route::get('/movies', 'PagesController@movies');

Route::get('/myprofile', 'PagesController@myprofile');