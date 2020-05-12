<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller{
    
    public function allComments(){
        $about = About::all();
        // dd($about);
        return  view('aboutUs', ['comments'=>$about]);       
    }

    public function sendRespons(){

        return redirect()->route('home')->with('success', 'Успешно');
    }
}
