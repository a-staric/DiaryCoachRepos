<?php

namespace App\Http\Controllers\News;

use App\Album;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNews;
use App\Http\Requests\UpdateNews;
use App\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderByDesc('updated_at')
        ->paginate(5);
        return view('news.index', compact('news'));
    }


    public function create()
    {
        $news = new News();
        return view('news.create', compact('news'));
    }


    public function store(StoreNews $request)
    {

        $data = $request->validated();
        $album_name = $data['title'];
        $album = (new Album())->insertGetId([ 'name'=> $album_name, 'is_news' => true]);
        $data += ['album_id' => $album];
        $news = (new News())->create($data);
        $news->save();

        if($news->exists){

            return redirect()->route('photo.create')
                    ->with(['album_id' => $album]);

        }else{
            return back();
        }
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }


    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }


    public function update(UpdateNews $request, $id)
    {
        $news = News::findOrFail($id);
        $data = $request->validated();
        DB::table('albums')->where('id', '=' , $news->album_id)->update(['name' => $data['title']]);
        $result = $news->update($data);


       if($result){
           return redirect()->route('news.index')
               ->with(['success'=>'Новость успешно обновлена!']);
       } else{
           return back();
       }
    }


    public function destroy($id)
    {
       $news = News::findOrFail($id);
       $deleted_name = 'deleted'.$news->title;
       DB::table('albums')->where('id', '=' , $news->album_id)->update(['name' => $deleted_name]);
       $result = $news->delete();

       if($result){
           return redirect()->route('news.index')
               ->with(['success'=>'Новость успешно удалена!']);
       } else{
           return back();
       }
    }
}
