<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\AboutRequest;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller{
    
    public $model;

    public function __construct(){
        $this->model = new About();
    }

    public function allComments(){
        $about = $this->model->allData();
        $data = ['comments'=>$about];
        if (Auth::check() && Auth::user()->isAdmin()) 
            $data['linksOnTable'] = ['/about/getAllComments'];
        return  view('aboutUs')->with($data);       
    }

    public function sendRespons(AboutRequest $req){

        // $this->model->user = $req->input('user');
        $this->model->user = 1;
        $this->model->message = $req->input('message');

        $this->model->save();

        return redirect()->route('home')->with('success', 'Успешно');
    }

    public function getAllComments(){
        return $about = $this->model->allForAdmin();
    }
}
