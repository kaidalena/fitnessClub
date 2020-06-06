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
        return  view('cards', [
            'cards'=>$cards,
            'group' => Cards_groups::all()]
        );       
    }
    
    public function cardsBuyForm(){
        $id_card = $_POST['card_id'];
        $data = $this->model->searchById($id_card);
        $data['user'] = Auth::user();
        return view('cardsBuyForm', $data);
    }
}
