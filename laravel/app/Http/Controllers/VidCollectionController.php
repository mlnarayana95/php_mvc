<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vid_collection;

class VidCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slug = 'home';
        $title = 'Funflix - Home Page';
        $videos = vid_collection::getRecentVideos(); 
        $subtitle = 'Displaying latest tv shows and movies';
        return view('Admin.vid_collection.index',compact('slug','title','subtitle','videos'));
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
    public function show($video_id)
    {
        $video = vid_collection::getVideo($video_id);
        $heading = ucwords(strtolower($video['title']));
        $title = "Funflix Canada - Detailed View";
        $slug = "Detailed View";
        return view('detailed_view',compact('video','heading','title','slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
