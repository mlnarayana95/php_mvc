<?php

Route::get('/', 'PagesController@home');

Route::get('/tvshows', 'PagesController@tvshows');

Route::get('/movies', 'PagesController@movies');