<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class IndexController extends Controller{

  public function index(){
      return view('index')->with([
        'news' => News::get(),
        'linksOnTable' => [route('admin.news.forTable')]
      ]);
  }

  public function newsForTable() {
      $data['titles'] = ["Заголовок", "Новость"];
      $data['data'] = [];

      foreach (News::select('title', 'message')->get() as $news) {
          $data['data'][] = [
            'title' => $news->title,
            'message' => $news->message,
          ];
      }

      return response()->json($data);
  }
}
