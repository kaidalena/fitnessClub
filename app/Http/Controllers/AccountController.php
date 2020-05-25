<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\Models\Account;

class AccountController extends Controller{

    public function index(){
        return view('account');
    }

    public function login(){
        return view('accountLoginForm');
    }

    public function edit(){
        return view('accountEditForm');
    }

    public function enter(AccountRequest $req){

    }

    public function registration(AccountRequest $req){

        $account = new Account();
        $account->name = $req->input('name');
        $account->surname = $req->input('surname');
        $account->email = $req->input('email');
        $account->weight = $req->input('weight');
        $account->height = $req->input('height');

        $account->save();

        return redirect()->route('account')->with('success', 'Успешно');
    }

    public function editPost(AccountRequest $req){

        $account = new Account();
        $account->name = $req->input('name');
        $account->surname = $req->input('surname');
        $account->email = $req->input('email');
        $account->weight = $req->input('weight');
        $account->height = $req->input('height');

        $account->save();

        return redirect()->route('account')->with('success', 'Успешно');
    }
}
