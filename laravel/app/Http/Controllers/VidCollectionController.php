<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vid_collection;

class VidCollectionController extends Controller
{
    public function show($video_id)
    {
    	$video = vid_collection::getVideo($video_id);
    	$heading = ucwords(strtolower($video['title']));
    	$title = "Funflix Canada - Detailed View";
    	$slug = "Detailed View";
    	return view('detailed_view',compact('video','heading','title','slug'));
	}

	public function index()
    {
    	$slug = 'home';
    	$title = 'Funflix - Home Page';
        $videos = vid_collection::getRecentVideos(); 
    	$subtitle = 'Displaying latest tv shows and movies';
    	return view('Admin.vid_collection',compact('slug','title','subtitle','videos'));
    }
}
