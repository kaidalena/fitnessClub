<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trainers;

class GalleryController extends Controller{

    public function index(){
        return view('gallery')->with('trainers', trainers::get());
    }
}
