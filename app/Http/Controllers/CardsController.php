<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards;
use App\Models\Cards_groups;

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
        dd($_POST);
        return view('cardsBuyForm');
    }
}
