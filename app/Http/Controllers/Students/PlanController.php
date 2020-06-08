<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlan;
use App\Plan;
use Jenssegers\ Date\ Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    //Только для авторизированных
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
   {
        $plans = Plan::orderByDesc('plan_date')->paginate(10);
        return view('plan.index', compact('plans'));
   }

   public function create()
   {
    $plan = new Plan();  
    $students = DB::table('students')
    ->select('students.last_name','students.first_name', 'students.id')
    ->where('deleted_at',null)
    ->orderBy('last_name')
    ->get()->toArray();

    $trainingkinds = DB::table('training_kinds')
    ->select('training_kinds.name', 'training_kinds.id')
    ->orderBy('name')
    ->get()->toArray();
    
    return view('plan.create', compact('students', 'trainingkinds' ,'plan'));
   }

   public function store(StorePlan $request)
   {
       $data = $request->validated();
       $item = (new Plan())->create($data);
       $item->save();
       if($item->exists){
           return redirect()->route('plan.create')
                   ->with(['success'=>'План успешно добавлен!']);
       }else{
           return back();
       }
   }


   public function show($id)
   {
       //
   }


   public function edit($id)
   {
        $students = DB::table('students')
        ->select('students.last_name','students.first_name', 'students.id')
        ->where('deleted_at',null)
        ->orderBy('last_name')
        ->get()->toArray();

        $trainingkinds = DB::table('training_kinds')
        ->select('training_kinds.name', 'training_kinds.id')
        ->orderBy('name')
        ->get()->toArray();

       $plan = Plan::findOrFail($id);

       return view('plan.edit', compact('students', 'trainingkinds' ,'plan'));
   }


   public function update(StorePlan $request, $id)
   {
      
       $item = Plan::findOrFail($id);
       $data = $request->validated();
       $result = $item->update($data);

       if($result){
           return redirect()->route('plan.index')
               ->with(['success'=>'План успешно обновлен!']);
       } else{
           return back();
       }
   }

   public function destroy($id)
   {
       $item = Plan::findOrFail($id);
       $result = $item->delete();

       if($result){
           return redirect()->route('plan.index')
               ->with(['success'=>'План успешно удален!']);
       } else{
           return back();
       }
   }
}
