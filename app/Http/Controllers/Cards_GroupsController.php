<?php

namespace App\Http\Controllers;

use App\Models\Cards_groups;
use Illuminate\Http\Request;

class Cards_GroupsController extends Controller{

    public function dataForTable() {
        $data['titles'] = ["Название", "Цвет"];
        $data['data'] = Cards_groups::select('name', 'color', 'id')->get();
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = Cards_groups::create($request->all());
        $data->save();
        return response()->json([
          'cards_groups' => $data
        ]);
      }
    
    public function change(Request $request) {
        $news = Cards_groups::whereId($request->id)->first();
        $news->fill($request->except('id'));
        $news->update();
        return response()->json([
            'cards_groups' => $news
        ]);
    }

    public function delete(Request $request) {
        $news = Cards_groups::whereId($request->id)->first();
        $news->delete();

        return response()->json();
    }
    
    public static function getRoutesForAdmin(){
        return [
            "change" => route('admin.cards_groups.change'),
            'create' => route('admin.cards_groups.create'),
            'delete' => route('admin.cards_groups.delete')
        ];
    }
}
