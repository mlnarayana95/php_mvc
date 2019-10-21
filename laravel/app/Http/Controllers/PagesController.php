<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function tvshows()
    {
    	$slug = 'tvshows';
    	$title = 'Funflix - TV Shows';
    	$subtitle = 'Displaying latest tv shows';
    	return view('tvshows',compact('slug','title','subtitle'));
    }

    public function movies()
    {
    	$slug = 'movies';
    	$title = 'Funflix - Movies';
    	$subtitle = 'Displaying latest movies';
    	return view('movies',compact('slug','title','subtitle'));
    }

    public function myprofile()
    {
    	$slug = 'myprofile';
    	$title = 'Funflix - My profile';
    	$subtitle = 'Displaying user information';
    	return view('myprofile',compact('slug','title','subtitle'));
    }
}
