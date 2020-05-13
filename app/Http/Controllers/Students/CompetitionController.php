<?php

namespace App\Http\Controllers\Students;

use App\Album;
use App\Competition;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompetition;
use Illuminate\Support\Facades\DB;

class CompetitionController extends Controller
{

    public function index()
    {
        $competitions = Competition::all();
        foreach ($competitions as $competition) {
            $album_id = $competition->album_id;

            $photos = Photo::where('album_id',$album_id)
            ->pluck('path')->take(3);
            $items[] =(object) ['competitions' => $competition,
            'photos' => $photos];
        }

            return view('competition.index', compact('items'));
    }


    public function create()
    {
        $comp = new Competition();
        return view('competition.create',
               compact('comp'));
    }


    public function store(StoreCompetition $request)
    {

        $data = $request->validated();
        $album_name = $data['name'];
        $album = (new Album())->insertGetId([ 'name'=> $album_name, 'is_news' => false]);
        $data += ['album_id' => $album];
        $comp = (new Competition())->create($data);
        $comp->save();



        if($comp->exists){
            return redirect()->route('competition.index')
                    ->with(['success'=>'Соревнование успешно добавлено!']);
        }else{
            return back();
        }
    }

    public function show($id)
    {
        dd($id);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
