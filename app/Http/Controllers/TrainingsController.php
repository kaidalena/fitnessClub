<?php

namespace App\Http\Controllers;

use App\Models\Training_groups;
use App\Models\trainings;
use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    public function dataForTable() {
        $data['titles'] = ["Название", "Группа"];
        $data['data'] = trainings::select('name', 'training_group', 'id')->get();
        $data['foreignKeys'] = [
            'training_group' => Training_groups::select('id')->get(),
        ];
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = trainings::create($request->all());
        $data->save();
        return response()->json([
          'trainings' => $data
        ]);
    }
    
    public function change(Request $request) {
        $data = trainings::whereId($request->id)->first();
        $data->fill($request->except('id'));
        $data->update();
        return response()->json([
            'trainings' => $data
        ]);
    }

    public function delete(Request $request) {
        $data = trainings::whereId($request->id)->first();
        $data->delete();

        return response()->json();
    }

    public static function getRoutesForAdmin(){
        return [
            "change" => route('admin.trainings.change'),
            'create' => route('admin.trainings.create'),
            'delete' => route('admin.trainings.delete')
        ];
    }
}
