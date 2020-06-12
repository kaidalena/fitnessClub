<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class IndexController extends Controller{

  public function index(){
      return view('index')->with([
        'news' => News::get(),
        'linksOnTable' => [
            'news' => [
              'name' => "Новости",
              'route' => route('admin.news.forTable')
            ]
        ],              
        'routes' => [
          'news' => [
            // "get" => route('admin.news.forTable'),
            "change" => route('admin.news.change'),
            'create' => route('admin.news.create'),
            'delete' => route('admin.news.delete')
          ]
        ]
      ]);
  }

  public function dataForTable() {
      $data['titles'] = ["Заголовок", "Новость"];
      $data['data'] = News::select('title', 'message', 'id')->get();

      return response()->json($data);
  }

  public function create(Request $request) {
    $news = News::create($request->all());

    $news->save();

    return response()->json([
      'news' => $news
    ]);
  }

  public function change(Request $request) {
    $news = News::whereId($request->id)->first();

    $news->fill($request->except('id'));

    $news->update();

    return response()->json([
      'news' => $news
    ]);
  }

    public function delete(Request $request) {
      $news = News::whereId($request->id)->first();
      $news->delete();

      return response()->json();
    }
}
