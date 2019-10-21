<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vid_collection;

class PagesController extends Controller
{
    public function home()
    {
    	$slug = 'home';
    	$title = 'Funflix - Home Page';
        $videos = vid_collection::getRecentVideos(); 
    	$subtitle = 'Displaying latest tv shows and movies';
    	return view('home',compact('slug','title','subtitle','videos'));
    }

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
