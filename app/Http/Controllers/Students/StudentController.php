<?php

namespace App\Http\Controllers\Students;

use App\Student;
use App\Http\Controllers\Controller;
use App\StudentDistance;
use Illuminate\Http\Request;
//Для работы с БД
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Student::paginate(5);
        return view('students.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Student();
        // dd($item);
        return view('students.create',
               compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $item = (new Student())->create($data);
        $item->save();
        if($item->exists){
            // return redirect()->route('blog.admin.categories.edit', [$item->id])
            //         ->with(['success'=>'Успешно сохранено']);
            return redirect()->route('student.index');
        }else{
            // return back()->withErrors(['msg' => 'Ошибка сохранения'])
            //         ->withInput();
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
        
        $student = Student::findOrFail($id);

        $records = DB::table('student_distances')
        ->join('distances', 'student_distances.distance_id', '=', 'distances.id')
        ->select('distances.name', 'student_distances.result_time', 'student_distances.result_date')
        ->where('student_id', $id)
        ->get()->toArray();
        
        $competitions = DB::table('competitions')
        ->join('competition_results', 'competitions.id', '=', 'competition_results.competition_id')
        ->join('distances', 'competition_results.distance_id', '=', 'distances.id')
        ->select('competitions.name as comp_name', 'competitions.event_date', 'competitions.place',
                'distances.name as dist_name','competition_results.result_time')
        ->where('student_id', $id)
        ->get()->toArray();

        $plans = DB::table('plans')
        ->join('training_kinds', 'plans.training_kind_id', '=', 'training_kinds.id')
        ->select('training_kinds.name', 'training_kinds.description', 'plans.plan_date')
        ->where('student_id', $id)
        ->orderByDesc('plan_date')->paginate(7);

        return view ('students.show', compact('student','records','competitions','plans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Student::findOrFail($id);
        // dd($item);
        return view('students.edit', compact('item'));
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
        $item = Student::find($id);
        if(empty($item)){
            return back()->withErrors(['msg'=>"Запись id = [{$id}] не найдена"])->withInput();
        }

        $data = $request->all();
        $result = $item->update($data);

        if($result){
            return redirect()->route('student.show', $item->id)
                             ->with(['success'=>'Успешно сохранено']);
        } else{
            return back()->withErrors(['msg' => 'Ошибка сохранения'])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Student::find($id);
        if(empty($item)){
            return back()->withErrors(['msg'=>"Запись id = [{$id}] не найдена"])->withInput();
        }

        $result = $item->delete();

        if($result){
            return redirect()->route('student.index')
                             ->with(['success'=>'Успешно сохранено']);
        } else{
            return back()->withErrors(['msg' => 'Ошибка сохранения'])->withInput();
        }
    }
}
