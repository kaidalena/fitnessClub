<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller{

  public function index(){
    return view('service')->with([
      'services' =>  service::get(),
      'linksOnTable' => [
        'servise' => [
          'name' => "Услуги",
          'route' => route('admin.service.forTable')
        ]
      ], 
      'routes' => [
        "get" => route('admin.news.forTable'),
        "change" => route('admin.service.change'),
        'create' => route('admin.service.create'),
        'delete' => route('admin.service.delete')
      ]
    ]);
  }

  public function serviceForTable() {
      $data['titles'] = ["Путь к фото", "Заголовок"];
      $data['data'] = service::select('img_path', 'title', 'id')->get();

      return response()->json($data);
  }
  public function create(Request $request) {
    $news = service::create($request->all());

    $news->save();

    return response()->json([
      'news' => $news
    ]);
  }

  public function change(Request $request) {
    $news = service::whereId($request->id)->first();

    $news->fill($request->except('id'));

    $news->update();

    return response()->json([
      'news' => $news
    ]);
  }

    public function delete(Request $request) {
      $news = service::whereId($request->id)->first();
      $news->delete();

      return response()->json();
    }
  }
