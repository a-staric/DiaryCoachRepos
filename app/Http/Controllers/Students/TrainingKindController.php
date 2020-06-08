<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrainingKind;
use App\TrainingKind;
use Illuminate\Http\Request;

class TrainingKindController extends Controller
{
    //Только для авторизированных
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index()
   {
       $items = TrainingKind::paginate(10);
       return view('trainingkind.index', compact('items'));
   }

   public function create()
   {
       $item = new TrainingKind();
       return view('trainingkind.create',
              compact('item'));
   }

   public function store(StoreTrainingKind $request)
   {
       $data = $request->validated();
       $item = (new TrainingKind())->create($data);
       $item->save();
       if($item->exists){
           return redirect()->route('trainingkind.index')
                   ->with(['success'=>'Вид тренировки успешно добавлен!']);
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
       $item = TrainingKind::findOrFail($id);
       return view('trainingkind.edit', compact('item'));
   }


   public function update(StoreTrainingKind $request, $id)
   {
      
       $item = TrainingKind::findOrFail($id);
       $data = $request->validated();
       $result = $item->update($data);

       if($result){
           return redirect()->route('trainingkind.index')
               ->with(['success'=>'Вид тренировки успешно обновлен!']);
       } else{
           return back();
       }
   }

   public function destroy($id)
   {
       $item = TrainingKind::findOrFail($id);
       $result = $item->delete();

       if($result){
           return redirect()->route('trainingkind.index')
               ->with(['success'=>'Вид тренировки успешно удален!']);
       } else{
           return back();
       }
   }
}
