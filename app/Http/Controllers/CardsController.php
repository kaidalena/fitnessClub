<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards;
use App\Models\Cards_groups;
use Illuminate\Support\Facades\Auth;


class CardsController extends Controller{
    
    public $model;

    public function __construct(){
        $this->model = new Cards();
    }

    public function allCards(){
        $cards = $this->model->allData();
        
        return view('cards')->with([
            'cards' => $cards,
            'group' => Cards_groups::all(),
            'linksOnTable' => [
                'cards' => [
                  'name' => "Абонементы",
                  'route' => route('admin.cards.forTable')
                ],
                'cards_groups' => [
                    'name' => "Группы карт",
                    'route' => route('admin.cards_groups.forTable')
                ]
            ],              
            'routes' => [
                'cards' => $this->getRoutesForAdmin(),
                'cards_groups' => Cards_GroupsController::getRoutesForAdmin(),
            ]
          ]);
    }
    
    public function cardsBuyForm(){
        $id_card = $_POST['card_id'];
        $data = $this->model->searchById($id_card);
        $data['user'] = Auth::user();
        return view('cardsBuyForm', $data);
    }

    public function dataForTable() {
        $data['titles'] = ["Название", "Кол-во недель", "Кол-во тренировок в нед.", "Группа"];
        $data['data'] = Cards::select('name', 'number_of_weeks', 'number_of_training', 'card_group', 'id')->get();
        $data['foreignKeys'] = [
            'card_group' => Cards_groups::select('id')->get()
        ];
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = Cards::create($request->all());
        $data->save();
        return response()->json([
          'cards' => $data
        ]);
      }
    
    public function change(Request $request) {
        $news = Cards::whereId($request->id)->first();
        $news->fill($request->except('id'));
        $news->update();
        return response()->json([
            'cards' => $news
        ]);
    }

    public function delete(Request $request) {
        $news = Cards::whereId($request->id)->first();
        $news->delete();

        return response()->json();
    }

    public static function getRoutesForAdmin(){
        return [
            "change" => route('admin.cards.change'),
            'create' => route('admin.cards.create'),
            'delete' => route('admin.cards.delete')
        ];
    }
}
