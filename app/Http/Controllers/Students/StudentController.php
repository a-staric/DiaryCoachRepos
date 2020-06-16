<?php

namespace App\Http\Controllers\Students;
use Illuminate\Support\Facades\Storage;

use App\Student;
use App\Http\Controllers\Controller;
use App\StudentDistance;
use Illuminate\Http\Request;
//Для работы с БД
use Illuminate\Support\Facades\DB;
//Requset - проверка полей
use App\Http\Requests\StoreStudent;

class StudentController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        // withTrashed()
        $items = Student::orderBy('last_name')
        ->paginate(5);
        return view('students.index', compact('items'));
    }

    public function create()
    {
        $item = new Student();
        return view('students.create',
               compact('item'));
    }

    public function store(StoreStudent $request)
    {
        $data = $request->validated();
        if (isset($data['image_path'])) {
            $imageName = rand(10, 90).'_'.time().'.'.$data['image_path']->getClientOriginalExtension();
            $data['image_path']->move(public_path('avatar'), $imageName);
            $data['image_path'] = $imageName;
        }
        $item = (new Student())->create($data);
        $item->save();
        if($item->exists){
            return redirect()->route('student.index')
                    ->with(['success'=>'Запись добавлена успешно: перейти','l_name'=>$item->last_name,'f_name'=>$item->first_name,'id'=>$item->id]);
        }else{
            return back();
        }
    }


    public function show($id)
    {

        $student = Student::findOrFail($id);

        $records = DB::table('student_distances')
        ->join('distances', 'student_distances.distance_id', '=', 'distances.id')
        ->select('student_distances.id', 'distances.name', 'student_distances.result_time', 'student_distances.result_date')
        ->where('student_id', $id)
        ->orderByDesc('result_date')
        ->get()->toArray();

        $competitions = DB::table('competitions')
        ->join('competition_results', 'competitions.id', '=', 'competition_results.competition_id')
        ->join('distances', 'competition_results.distance_id', '=', 'distances.id')
        ->select('competitions.name as comp_name', 'competitions.event_date', 'competitions.place',
                'distances.name as dist_name','competition_results.result_time',  'competition_results.place as res')
        ->where('student_id', $id)
        ->get()->toArray();

        $plans = DB::table('plans')
        ->join('training_kinds', 'plans.training_kind_id', '=', 'training_kinds.id')
        ->select('training_kinds.name', 'training_kinds.description', 'plans.plan_date')
        ->where('student_id', $id)
        ->orderByDesc('plan_date')->paginate(7);

        return view ('students.show', compact('student','records','competitions','plans'));
    }


    public function edit($id)
    {
        $item = Student::findOrFail($id);
        return view('students.edit', compact('item'));
    }

    public function update(StoreStudent $request, $id)
    {
        $item = Student::findOrFail($id);
        $data = $request->validated();
    //    dd( Storage::disk('public')->delete(public_path('avatar/'.$item->image_path)));
        if (isset($data['image_path'])) {
            $imageName = rand(10, 90).'_'.time().'.'.$data['image_path']->getClientOriginalExtension();
            $data['image_path']->move(public_path('avatar'), $imageName);
            $data['image_path'] = $imageName;
        }

        $result = $item->update($data);

        if($result){
            return redirect()->route('student.show', $item->id);
        } else{
            return back();
        }
    }


    public function destroy($id)
    {
        $item = Student::find($id);
        if(empty($item)){
            return back()->withErrors(['msg_delete'=>"Запись с  id = [{$id}] не найдена!"])->withInput();
        }

        $result = $item->delete();

        if($result){
            return redirect()->route('student.index');
        } else{
            return back();
        }
    }
}
