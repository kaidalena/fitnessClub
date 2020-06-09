<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function dataForTable() {
        $data['titles'] = ["Имя", "Фамилия", "Дата рождения", "Email", "Admin", "Вес", "Рост"];
        $data['data'] = Users::select('name', 'surname', 'birthday', 'email', 'is_admin', 'weight', 'height', 'id')->get();
  
        return response()->json($data);
    }
}
