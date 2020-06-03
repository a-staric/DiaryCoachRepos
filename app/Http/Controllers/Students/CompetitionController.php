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
        $competitions = Competition::orderByDesc('created_at')->paginate(6);
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

            return redirect()->route('photo.create')
                    ->with(['album_id' => $album]);

        }else{
            return back();
        }
    }

    public function show($id)
    {
        $competition = Competition::findOrFail($id);

        $photos = DB::table('photos')
        ->select('photos.path')
        ->where('album_id','=', $competition->album_id)
        ->orderByDesc('created_at')
        ->get()->toArray();

        $results = DB::table('competition_results')
        ->join('students', 'competition_results.student_id', '=', 'students.id')
        ->join('distances', 'competition_results.distance_id', '=', 'distances.id')
        ->select('students.first_name', 'students.last_name', 'students.id as student_id','distances.name as distance_name',
        'competition_results.result_time', 'competition_results.id as comp_result_id')
        ->where('competition_id', $id)
        // ->orderBy('name')
        ->get()->toArray();

        return view('competition.show', compact('competition','photos','results'));
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
