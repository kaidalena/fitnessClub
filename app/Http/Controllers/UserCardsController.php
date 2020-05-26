<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCards;
use App\Http\Requests\CardRequest;

class UserCardsController extends Controller{
    
    public $model;

    public function __construct(){
        $this->model = new UserCards();
    }

    public function buy(CardRequest $req){
        // validation
        
        $this->model->user = $req->input('user_id');
        $this->model->card = $req->input('card_id');

        $this->model->save();

        return redirect()->route('home')->with('success', 'Успешно');
    }
}
