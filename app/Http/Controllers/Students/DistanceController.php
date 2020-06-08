<?php

namespace App\Http\Controllers\Students;

use App\Distance;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDistance;
use Illuminate\Http\Request;

class DistanceController extends Controller
{
     //Только для авторизированных
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $items = Distance::paginate(10);
        return view('distance.index', compact('items'));
    }

    public function create()
    {
        $item = new Distance();
        return view('distance.create',
               compact('item'));
    }

    public function store(StoreDistance $request)
    {
        $data = $request->validated();
        $item = (new Distance())->create($data);
        $item->save();
        if($item->exists){
            return redirect()->route('distance.index')
                    ->with(['success'=>'Дистанция успешно добавлена!']);
        }else{
            return back();
        }
    }




    public function edit($id)
    {
        $item = Distance::findOrFail($id);
        return view('distance.edit', compact('item'));
    }


    public function update(StoreDistance $request, $id)
    {
        $item = Distance::findOrFail($id);
        $result = $item->update($request->validated());

        if($result){
            return redirect()->route('distance.index')
                ->with(['success'=>'Дистанция успешно обновлена!']);
        } else{
            return back();
        }
    }

    public function destroy($id)
    {
        $item = Distance::findOrFail($id);
        $result = $item->delete();

        if($result){
            return redirect()->route('distance.index')
                ->with(['success'=>'Дистанция успешно удалена!']);
        } else{
            return back();
        }
    }
}
