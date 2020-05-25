<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model{
    
    public function allData(){
        $cards = $this->orderBy('card_group')->select()->get();
        return $cards;
    }

    public function cardsGroupInfo(){
        return $this->belongsTo('App\Models\Cards_groups', 'card_group', 'id');
    }
}
