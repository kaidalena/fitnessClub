<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller{

    public function index(){
        return view('index')->with('news', News::get());
    }
}
