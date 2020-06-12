<?php

namespace App\Http\Controllers;

use App\Models\Training_groups;
use Illuminate\Http\Request;

class Training_GroupsController extends Controller
{
    public function dataForTable() {
        $data['titles'] = ["Название", "Цвет"];
        $data['data'] = Training_groups::select('name', 'color', 'id')->get();
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = Training_groups::create($request->all());
        $data->save();
        return response()->json([
          'training_groups' => $data
        ]);
    }
    
    public function change(Request $request) {
        $data = Training_groups::whereId($request->id)->first();
        $data->fill($request->except('id'));
        $data->update();
        return response()->json([
            'training_groups' => $data
        ]);
    }

    public function delete(Request $request) {
        $data = Training_groups::whereId($request->id)->first();
        $data->delete();

        return response()->json();
    }

    public static function getRoutesForAdmin(){
        return [
            "change" => route('admin.training_groups.change'),
            'create' => route('admin.training_groups.create'),
            'delete' => route('admin.training_groups.delete')
        ];
    }
}
