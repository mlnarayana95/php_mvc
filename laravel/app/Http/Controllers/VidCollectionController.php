<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vid_collection;

class VidCollectionController extends Controller
{
    public function detailedview($video_id)
    {
    	$video = vid_collection::getVideo($video_id);
    	dd($video);
	}
}
