<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\Models\Account;
use App\Models\Users;
use App\Models\UserCards;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller{


    public function index(){
        $user = Auth::user();
        if (!$user) return redirect()->route('auth');

        $userCardsModel = new UserCards();
        $data = [
            'user' => $user,
            'cards' => $userCardsModel->getCardsByUser($user->id)
        ];
        return view('account', $data);
    }

    public function login(){
        if (Auth::user()) return redirect()->route('account');
        return view('accountLoginForm');
    }

    public function edit(){
        return view('accountEditForm', ['user'=>Auth::user()]);
    }

    public function enter(AccountRequest $req){

    }

    // public function registration(AccountRequest $req){

    //     $account = new Users();
    //     $account->name = $req->input('name');
    //     $account->surname = $req->input('surname');
    //     $account->birthday = $req->input('birthday');
    //     $account->email = $req->input('email');
    //     $account->weight = (!empty($req->input('weight'))) ? $req->input('weight') : null;
    //     $account->height = (!empty($req->input('height'))) ? $req->input('height') : null;

    //     $account->save();

    //     return redirect()->route('account')->with('success', 'Успешно');
    // }

    public function editPost(AccountRequest $req){

        $account = new Users();
        $name = $req->input('name');
        $surname = $req->input('surname');
        $birthday = date("Y-m-d H:i:s", strtotime($req->input('birthday')));
        $email = $req->input('email');
        $weight = (!empty($req->input('weight'))) ? $req->input('weight') : 'null';
        $height = (!empty($req->input('height'))) ? $req->input('height') : 'null';
        $id = Auth::user()->id;

        // $account->save();
        // $account->where('id', Auth::user()->id)->update(
        //     ['name' => $name,
        //      'surname' => $surname,
        //      'birthday' => $birthday,
        //      'email' => $email,
        //      'weight' => $weight,
        //      'height' => $height
        // ]);

        $affected = DB::update("update users set name='$name', surname='$surname', birthday='$birthday', email='$email',
            weight=$weight, height=$height where id = $id");

        return redirect()->route('account')->with('success', 'Успешно');
    }
}
