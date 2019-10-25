<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\vid_collection;
use \Carbon\Carbon;

class AdminVidCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slug = 'Admin - home';
        $title = 'Funflix - Admin Home Page';
        $videos = vid_collection::getAllVideos(); 
        $subtitle = 'Displaying latest tv shows and movies';
        return view('admin.vid_collection.index',compact('slug','title','subtitle','videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('i am in show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vid = vid_collection::getVideo($id); 
        $language_list = ['ENGLISH','SPANISH','HINDI','TELUGU','ARABIC'];
        return view('admin.vid_collection.edit',compact('vid','language_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = request()->validate([
            'title' => 'required',
            'video_type' => 'required',
            'language' => 'required',
            'rating' => 'required',
            'synopsis' => 'required',
            'plot' => 'required',
            'num_of_season' => 'required',
            'release_date' => 'required',
            'image' => 'required',
            'length' => 'required',
            'director' => 'required'

        ]);

        $video = vid_collection::getVideo($id);
        $video->title = request('title');
        $video->video_type = request('video_type');
        $video->language = request('language');
        $video->rating = request('rating');
        $video->synopsis = request('synopsis');
        $video->plot = request('plot');
        $video->num_of_season = request('num_of_season');
        $video->release_date = request('release_date');
        $video->image = request('image');
        $video->length = request('length');
        $video->director = request('director');
        $video->updated_at = Carbon::now();
        $video->save();
        return redirect('/admin/vid_collection')->with('success', 'Video has been modified!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = vid_collection::getVideo($id);
        $videos = vid_collection::getAllVideos();
        $video->delete();
 /*       return('admin.vid_collection.index',compact('videos'));
 */   }      
}
