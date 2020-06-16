<?php

namespace App\Http\Controllers\News;

use App\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    
    // Вывод всех альбомов
    public function index()
    {
        $albums = Album::orderBy('created_at')
        ->paginate(6);
        // dd($album->news->id);
        return view('album.index', compact('albums'));
    }

    // Вывод одного альбома
    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('album.show', compact('album'));
    }

}
