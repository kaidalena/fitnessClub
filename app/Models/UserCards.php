<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cards;
use DateTime;

class UserCards extends Model{

    protected $guarded = [];
    
    public function getCardsByUser($id_user){
        $cardModel = new Cards();
        $result = [];
        $i = 0;
        $cards = $this->select()->where('user', $id_user)->orderBy('expiry_date', 'desc')->get();
        foreach($cards as $card){
            $result[$i] = $cardModel->searchById($card->card);
            $result[$i]['id'] = $card->id;
            $result[$i]['expiry_date'] = $card->expiry_date;
            $result[$i]['remains'] = $card->remains;
            $i++;
        }

        return $result;
    }
}
