<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller{
    
    public $model;

    public function __construct(){
        $this->model = new About();
    }

    public function allComments(){
        $about = $this->model->allData();
        return  view('aboutUs', ['comments'=>$about]);       
    }

    public function sendRespons(AboutRequest $req){

        // $this->model->user = $req->input('user');
        $this->model->user = 1;
        $this->model->message = $req->input('message');

        $this->model->save();

        return redirect()->route('home')->with('success', 'Успешно');
    }
}
