<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class ServiceController extends Controller{

  public function index(){
    return view('service')->with([
      'services' =>  service::get(),
      'linksOnTable' => [route('admin.service.forTable')]
    ]);
  }

  public function serviceForTable() {
      $data['titles'] = ["Путь к фото", "Заголовок"];
      $data['data'] = [];

      foreach (service::select('title', 'img_path')->get() as $service) {
          $data['data'][] = [
            'img_path' => $service->img_path,
            'title' => $service->title,
          ];
      }

      return response()->json($data);
  }
  }
