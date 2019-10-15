<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$slug = 'home';
    	$title = 'Funflix - Home Page';
    	return view('home',compact('slug'));
    }

    public function tvshows()
    {
    	$slug = 'tv show';
    	$title = 'Funflix - TV Shows';
    	return view('tvshows',compact('slug'));
    }
}
