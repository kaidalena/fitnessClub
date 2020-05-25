<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shedule;
use App\Models\Training_groups;

class SheduleController extends Controller{
    
    private $model;

    public function __construct(){
        $this->model = new Shedule();
    }

    public function getAllTrainings(){
        $trainings = $this->model->allData();
        $groups = Training_groups::all();
        return  view('schedule', 
            [
                'trainings'=>$trainings, 
                'groups' => $groups
            ]);   
    }
}
