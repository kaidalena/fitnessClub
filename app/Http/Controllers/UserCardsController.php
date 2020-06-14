<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCards;
use App\Http\Requests\CardRequest;
use App\Models\Cards;
use App\User;

class UserCardsController extends Controller{
    

    public function __construct(){
        
    }

    public function buy(CardRequest $req){
        // validation
        $weeks = Cards::select("number_of_weeks")->where('id', $req->input('card_id'))->first()->number_of_weeks;
        $inWeek = Cards::select("number_of_training")->where('id', $req->input('card_id'))->first()->number_of_training;
        $days = $weeks*7;
        $date = date('Y-m-d H:i:s');
        $expiry_date = date('Y-m-d', strtotime("$date +$days days"));

        $model = new UserCards();
        
        $model->user = $req->input('user_id');
        $model->card = $req->input('card_id');
        $model->remains = ($weeks*$inWeek);
        $model->expiry_date = $expiry_date;

        $model->save();

        // return redirect()->route('home')->with('success', 'Успешно');
        return redirect()->route('cards')->with('success', 'Записано в бд');
    }

    public function dataForTable() {
        $data['titles'] = ["Клиент", "Абонемент", "Остаток занятий", "Активен до"];
        $data['data'] = UserCards::select('user', 'card', 'remains', 'expiry_date', 'id')->get();
        $data['foreignKeys'] = [
            'user' => User::select('id')->get(),
            'card' => Cards::select('id')->get()
        ];
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = UserCards::create($request->all());
        $data->save();
        return response()->json([
          'userCards' => $data
        ]);
      }
    
    public function change(Request $request) {
        $news = UserCards::whereId($request->id)->first();
        $news->fill($request->except('id'));
        $news->update();
        return response()->json([
            'userCards' => $news
        ]);
    }

    public function delete(Request $request) {
        $news = UserCards::whereId($request->id)->first();
        $news->delete();

        return response()->json();
    }

    public static function getRoutesForAdmin(){
        return [
            "change" => route('admin.users_cards.change'),
            'create' => route('admin.users_cards.create'),
            'delete' => route('admin.users_cards.delete')
        ];
    }
}
