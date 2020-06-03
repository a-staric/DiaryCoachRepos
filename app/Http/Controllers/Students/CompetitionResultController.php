<?php

namespace App\Http\Controllers\Students;

use App\CompetitionResult;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompetitionResultController extends Controller
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
        $students = DB::table('students')
        ->select('students.last_name','students.first_name', 'students.id')
        ->orderBy('last_name')
        ->get()->toArray();

        $distances = DB::table('distances')
        ->select('distances.name', 'distances.id')
        ->orderBy('name')
        ->get()->toArray();

        $competitions = DB::table('competitions')
        ->select('competitions.name', 'competitions.id')
        ->orderBy('name')
        ->get()->toArray();

        return view('competitionresults.create', compact('students', 'distances', 'competitions'));
    }

  
    public function store(StoreCompResult $request)
    {
        $data = $request->validated();
        $item = (new CompetitionResult())->create($data);
        $item->save();
        if($item->exists){
            return redirect()->route('competition.show', $item->competition_id )
                    ->with(['success'=>'Запись добавлена успешно добавлена']);
        }else{
            return back();
        }
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
        $item = CompetitionResult::findOrFail($id);
        $result = $item->delete();
        if($result){
            return redirect()->route('competition.show',$item->competition_id)
                ->with(['success'=>'Результат выступления успешно удален!']);
        } else{
            return back();
        }
    }
}
