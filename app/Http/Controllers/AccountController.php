<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller{

    public function load(AccountRequest $req){
        return redirect()->route('home')->with('success', 'Успешно');
    }
}
