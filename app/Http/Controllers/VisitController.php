<?php

namespace App\Http\Controllers;

use App\Models\Training_groups;
use Illuminate\Http\Request;
use App\Models\Visit;
use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
    public function index(){
        
        $data = Visit::where('user', Auth::id())->get();
        return response()->json([
            'visits' => $data,
            'groups' => Training_groups::get()
          ]);
    }
}
