<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cards_groups;

class Cards extends Model{
    
    public function allData(){
        $cards = $this->orderBy('card_group')->select()->get();
        return $cards;
    }

    public function searchById($id){
        // $row = $this->select()->where('id', $id)->get();
        $row = $this->find($id);
        // dd($row->cardsGroupInfo);
        return [
            'card' => $row,
            'group' => $row->cardsGroupInfo
        ];
    }

    public function cardsGroupInfo(){
        return $this->belongsTo('App\Models\Cards_groups', 'card_group', 'id');
    }
}
