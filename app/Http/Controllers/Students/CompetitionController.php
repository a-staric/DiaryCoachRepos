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

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index()
    {
        $competitions = Competition::orderByDesc('event_date')->paginate(6);
        return view('competition.index', compact('competitions'));
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
        'competition_results.result_time', 'competition_results.id as comp_result_id', 'competition_results.place as student_place')
        ->where('competition_id', $id)
        // ->orderBy('name')
        ->get()->toArray();

        return view('competition.show', compact('competition','photos','results'));
    }


    public function edit($id)
    {
        $comp = Competition::findOrFail($id);
        return view('competition.edit', compact('comp'));
    }


    public function update(StoreCompetition $request, $id)
    {
        $comp = Competition::findOrFail($id);
        $data = $request->validated();
        DB::table('albums')->where('id', '=' , $comp->album_id)->update(['name' => $data['name']]);
        $result = $comp->update($data);


       if($result){
           return redirect()->route('competition.index')
               ->with(['success'=>'Соревнование успешно обновлено!']);
       } else{
           return back();
       }
    }


    public function destroy($id)
    {
       $comp = Competition::findOrFail($id);
       $deleted_name = 'deleted'.$comp->name;
       DB::table('albums')->where('id', '=' , $comp->album_id)->update(['name' => $deleted_name]);
       $result = $comp->delete();

       if($result){
           return redirect()->route('competition.index')
               ->with(['success'=>'Соревнование успешно удалено!']);
       } else{
           return back();
       }
    }
}
