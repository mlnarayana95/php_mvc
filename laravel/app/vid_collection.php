<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vid_collection extends Model
{
    protected $primaryKey = 'video_id';

    public static function getAllVideos()
    {
    	return self::all();
    }

    public static function getRecentVideos()
    {
    	return self::orderBy('release_date','DESC')->get();
    }

    public static function getVideo($video_id)
    {	
    	return self::where('video_id',$video_id)->firstOrFail();
    }
}
