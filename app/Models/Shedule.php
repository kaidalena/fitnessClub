<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Trainings;
use App\Models\Training_groups;

class Shedule extends Model{
    
    protected $guarded = [];

    public function allData(){
        $weekdays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'satuday', 'sunday'];
        
        $trainings = $this->all();
        $result = [];

        for($i=0; $i<count($trainings); $i++){
            $result[$i]['time'] = $trainings[$i]['time'];
            foreach($weekdays as $day){
                if (!empty($trainings[$i][$day])){
                    $training = Trainings::select('name', 'training_group')->where('id', '=', $trainings[$i][$day]);
                    $color = Training_groups::select()->where('id', '=', $training->value('training_group'))->value('color');
                    $result[$i][$day] = [
                        'name' => $training->value('name'),
                        'color' => $color
                    ];
                }else{
                    $result[$i][$day] = [
                        'name' => null,
                        'color' => 'entry'
                    ];
                }   
            }
        }
        // dd($result);
        return $result;
    }
}
