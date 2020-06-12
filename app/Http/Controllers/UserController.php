<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function dataForTable() {
        $data['titles'] = ["Имя", "Фамилия", "Дата рождения", "Email", "Admin", "Вес", "Рост"];
        $data['data'] = Users::select('name', 'surname', 'birthday', 'email', 'is_admin', 'weight', 'height', 'id')->get();
  
        return response()->json($data);
    }

    public function create(Request $request) {
        $users = User::create($request->all());
        $users->save();
        return response()->json([
          'users' => $users
        ]);
      }
    
    public function change(Request $request) {
        $users = User::whereId($request->id)->first();
        $users->fill($request->except('id'));
        $users->update();
        return response()->json([
            'users' => $users
        ]);
    }

    public function delete(Request $request) {
        $users = User::whereId($request->id)->first();
        $users->delete();

        return response()->json();
    }

    public static function getRoutesForAdmin(){
        return [
            // "get" => route('admin.users.forTable'),
            "change" => route('admin.users.change'),
            'create' => route('admin.users.create'),
            'delete' => route('admin.users.delete')
        ];
    }
}
