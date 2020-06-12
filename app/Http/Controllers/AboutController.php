<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\AboutRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller{
    
    public $model;

    public function __construct(){
        $this->model = new About();
    }

    public function allComments(){
        $about = $this->model->allData();
        // $data = ['comments'=>$about];
        // if (Auth::check() && Auth::user()->isAdmin()) 
        //     $data['linksOnTable'] = ['/about/getAllComments'];
        // return  view('aboutUs')->with($data);    
        
        return view('aboutUs')->with([
            'comments' => $about,
            // 'news' => $this->model::get(),
            'linksOnTable' => [
                'comments' => [
                  'name' => "Отзывы",
                  'route' => route('admin.comments.forTable')
                ],
                'users' => [
                    'name' => "Пользователи",
                    'route' => route('admin.users.forTable')
                ]
            ],              
            'routes' => [
                'comments' => $this->getRoutesForAdmin(),
                'users' => UserController::getRoutesForAdmin(),
            ]
          ]);
    }

    public function sendRespons(AboutRequest $req){

        // $this->model->user = $req->input('user');
        $this->model->user = Auth::id();
        $this->model->message = $req->input('message');

        $this->model->save();

        return redirect()->route('about')->with('success', 'Успешно');
    }

    public function getAllComments(){
        return $about = $this->model->allForAdmin();
    }

    public function dataForTable() {
        $data['titles'] = ["Пользователь", "Отзыв"];
        $data['data'] = About::select('user', 'message', 'id')->get();
        $data['foreignKeys'] = [
            'user' => User::select('id')->get()
        ];
  
        return response()->json($data);
    }

    public function create(Request $request) {
        // dd($request->all());
        $data = About::create($request->all());
        $data->save();
        return response()->json([
          'comments' => $data
        ]);
      }
    
    public function change(Request $request) {
        $news = About::whereId($request->id)->first();
        $news->fill($request->except('id'));
        $news->update();
        return response()->json([
            'comments' => $news
        ]);
    }

    public function delete(Request $request) {
        $news = About::whereId($request->id)->first();
        $news->delete();

        return response()->json();
    }

    public static function getRoutesForAdmin(){
        return [
            'change' => route('admin.abouts.change'),
            'create' => route('admin.abouts.create'),
            'delete' => route('admin.abouts.delete')
        ];
    }
}
