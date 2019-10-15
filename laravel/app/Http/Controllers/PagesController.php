<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$slug = 'home';
    	$title = 'Funflix - Home Page';
    	return view('home',compact('slug','title'));
    }

    public function tvshows()
    {
    	$slug = 'tvshows';
    	$title = 'Funflix - TV Shows';
    	return view('tvshows',compact('slug','title'));
    }

    public function movies()
    {
    	$slug = 'movies';
    	$title = 'Funflix - Movies';
    	return view('movies',compact('slug','title'));
    }

    public function myprofile()
    {
    	$slug = 'myprofile';
    	$title = 'Funflix - My profile';
    	return view('myprofile',compact('slug','title'));
    }
}
