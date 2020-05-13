<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
//
use App\StudentDistance;
use App\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProgress;

class StudentDistanceController extends Controller
{

    //Только для авторизированных
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Вывод всех рекордов
    public function index()
    {
        $distances = DB::table('distances')
            ->select('distances.id','distances.name')
            ->get()->toArray();



        foreach($distances as $distance)
        {
            $name = $distance->name;
            $record = DB::table('students')
            ->join('student_distances', 'students.id' , '=', 'student_distances.student_id')
            ->select('students.id','students.last_name', 'students.first_name', 'student_distances.result_time', 'student_distances.result_date')
            ->where('student_distances.distance_id', '=', $distance->id)
            ->orderBy('student_distances.result_time')
            ->limit(3)
            ->get()->toArray();

            $items[] =(object) ['name' => $name, 'records' => $record];
        }

        // $items = StudentDistance::paginate(5);

        return view('studentdistance.index', compact('items'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgress $request)
    {

        $data = $request->validated();
        $item = (new StudentDistance())->create($data);
        $item->save();
        if($item->exists){
            return redirect()->route('student.show', $request->student_id)
                    ->with(['success'=>'Достижение успешно добавлено!']);
        }else{
            return back();
        }
    }

    public function show($id)
    {

        $student = Student::findOrFail($id);

        $distances = DB::table('distances')
        ->select('distances.name', 'distances.id')
        ->orderBy('name')
        ->get()->toArray();

        $item = new StudentDistance();
        return view('studentdistance.create', compact('item','student','distances'));
    }


    public function destroy($id)
    {
        $item = StudentDistance::findOrFail($id);
        $result = $item->delete();
        if($result){
            return redirect()->route('student.show',$item->student_id)
                ->with(['success'=>'Достижение успешно удалено!']);
        } else{
            return back();
        }
    }
}
