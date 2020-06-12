<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trainings extends Model
{
    protected $guarded = [];
    
    public function groupInfo(){
        return $this->belongsTo('App\Models\Training_groups', 'training_group', 'id');
    }
}
