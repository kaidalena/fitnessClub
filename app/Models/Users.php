<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model{

    protected $guarded = [];

    public function comments(){
        $this->hasMany('App\Models\About', 'user');
    }
    
}
