<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shedule;
use App\Models\Training_groups;
use App\Models\trainings;

class SheduleController extends Controller{
    
    private $model;

    public function __construct(){
        $this->model = new Shedule();
    }

    public function getAllTrainings(){
        $trainings = $this->model->allData();
        $groups = Training_groups::all();

        return view('schedule')->with([
            'trainings'=>$trainings, 
            'groups' => $groups,
            'linksOnTable' => [
                'schedule' => [
                    'name' => "Расписание",
                    'route' => route('admin.schedule.forTable')
                ],
                'trainings' => [
                    'name' => "Тренировки",
                    'route' => route('admin.trainings.forTable')
                ],
                'trainings_groups' => [
                    'name' => "Группы тренировок",
                    'route' => route('admin.training_groups.forTable')
                ]
            ],              
            'routes' => [
                'schedule' => $this->getRoutesForAdmin(),
                'trainings' => TrainingsController::getRoutesForAdmin(),
                'trainings_groups' => Training_GroupsController::getRoutesForAdmin(),
            ]
            ]);
    }

    public function dataForTable() {
        $data['titles'] = ["Время", "Понедельник", "Вторник", "Среда", "Четверг", "Птяница", "Суббота", "Воскресенье"];
        $data['data'] = Shedule::select('time', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'satuday', 'sunday', 'id')->get();
        $data['foreignKeys'] = [
            'monday' => trainings::select('id')->get(),
            'tuesday' => trainings::select('id')->get(),
            'wednesday' => trainings::select('id')->get(),
            'thursday' => trainings::select('id')->get(),
            'friday' => trainings::select('id')->get(),
            'satuday' => trainings::select('id')->get(),
            'sunday' => trainings::select('id')->get(),
        ];
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = Shedule::create($request->all());
        $data->save();
        return response()->json([
          'schedule' => $data
        ]);
    }
    
    public function change(Request $request) {
        $data = Shedule::whereId($request->id)->first();
        dd($data);
        $data->fill($request->except('id'));
        $data->update();
        return response()->json([
            'schedule' => $data
        ]);
    }

    public function delete(Request $request) {
        $data = Shedule::whereId($request->id)->first();
        $data->delete();

        return response()->json();
    }

    public function getRoutesForAdmin(){
        return [
            'change' => route('admin.schedule.change'),
            'create' => route('admin.schedule.create'),
            'delete' => route('admin.schedule.delete')
        ];
    }
}
