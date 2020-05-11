<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\Models\Account;

class AccountController extends Controller{

    public function load(AccountRequest $req){

        $account = new Account();
        $account->name = $req->input('name');
        $account->surname = $req->input('surname');
        $account->email = $req->input('email');
        $account->weight = $req->input('weight');
        $account->height = $req->input('height');

        $account->save();

        return redirect()->route('home')->with('success', 'Успешно');
    }
}
