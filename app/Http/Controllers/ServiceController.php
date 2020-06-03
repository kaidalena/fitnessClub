<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller{

    public function index(){
        return view('service')->with('services', service::get());
    }
}
