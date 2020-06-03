<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photos = new Photo();
        $albums = DB::table('albums')
            ->select('albums.id','albums.name')
            ->get()->toArray();
        return view('photo.create', compact('photos', 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'path*' => 'required|image|mimes:image/*|max:2048',
            'album_id' => 'required',
       ]);

        $imgNames = [];
        $album_id = $request['album_id'];
        foreach($request->path as $pat){

        $imageName = rand(10, 90).'_'.time().'.'.$pat->getClientOriginalExtension();
        $pat->move(public_path('images'), $imageName);

        $photo = new Photo();
        $photo->path = $imageName;
        $photo->album_id = $album_id;
        $photo->save();

        $imgNames[] = $imageName;

        }

        return back()
            ->with('success','Фото успешно загружено.')
            ->with('images',$imgNames);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
