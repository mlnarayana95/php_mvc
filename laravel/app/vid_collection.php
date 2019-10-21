<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vid_collection extends Model
{
    public static function getAllVideos()
    {
    	return self::all();
    }

    public static function getRecentVideos()
    {
    	return self::orderBy('release_date','DESC')->get();
    }
}
