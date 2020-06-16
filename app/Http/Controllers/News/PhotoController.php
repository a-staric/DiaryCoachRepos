<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        //
    }

    public function create()
    {
        $photos = new Photo();
        $albums = DB::table('albums')
            ->select('albums.id','albums.name')
            ->get()->toArray();
        return view('photo.create', compact('photos', 'albums'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:102048',
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


    public function destroy($id)
    {
        $item = Photo::findOrFail($id);
        $result = $item->delete();

        if($result){
            return redirect()->route('album.index')
                ->with(['success'=>'Дистанция успешно удалена!']);
        } else{
            return back();
        }
    }
}
