<?php

namespace App\Models;
use App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class About extends Model{
    
    public function allData(){
        $rowsRespons = $this->all();
        
        foreach($rowsRespons as $row){
            $row['fio'] = $row->userInfo->fio;
        }
        return $rowsRespons;
    }

    public function userInfo(){
        return $this->belongsTo('App\Models\Users', 'user', 'id');
    }

    public function allForAdmin(){
        
    }
}
