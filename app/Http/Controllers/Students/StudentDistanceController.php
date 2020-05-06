<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use App\StudentDistance;
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
        // $items = StudentDistance::paginate(5);


         $items = DB::table('students')
        ->join('student_distances', 'students.id' , '=', 'student_distances.student_id')
        ->join('distances', 'student_distances.distance_id', '=', 'distances.id')
        ->select('students.id','students.last_name','students.first_name','distances.name', 'student_distances.result_time', 'student_distances.result_date')
        ->orderByDesc('last_name')
        ->get()->toArray();
        // dd($items);

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
    {   $student_id = $id;
        $distances = DB::table('distances')
        ->select('distances.name', 'distances.id')
        ->orderByDesc('name')
        ->get()->toArray();

        $item = new StudentDistance();
        return view('studentdistance.create', compact('item','student_id','distances'));
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
