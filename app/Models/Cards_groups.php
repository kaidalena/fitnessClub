<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cards_groups extends Model{
    
    public function cards(){
        $this->hasMany('App\Models\Cards', 'card_group', 'id');
    }
}
