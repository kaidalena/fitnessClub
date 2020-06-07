<?php

namespace App\Models;
use App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class About extends Model{
    
    public function allData(){
        $rowsRespons = $this->all();
        
        for($i=0; $i<count($rowsRespons); $i++){
            $rowsRespons[$i]['fio'] = $rowsRespons[$i]->userInfo['surname']." ".$rowsRespons[$i]->userInfo['name'];
        }
        // var_dump($rowsRespons);
        return $rowsRespons;
    }

    public function userInfo(){
        return $this->belongsTo('App\Models\Users', 'user', 'id');
    }

    public function allForAdmin(){
        $res = [];
        $res['titles'] = ["Пользователь", "Комментарий"];
        $data = $this->allData();
        for($i=0; $i<(count($data)); $i++){
            $res['data'][$i]['fio'] = $data[$i]['fio'];
            $res['data'][$i]['message'] = $data[$i]->message;
        }

        return $res;
    }
}
