<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class check
{
    private $routes = [
        // '/about/getAllComments' => '',
        '/cards/buy' => '/cards',
        '/account/edit-post' => '/account/edit',
        '/account/edit' => '/account',
        '/admin/news-for-table' => '/news',
        '/aboutUs-post' => '/aboutUs'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $thisURI = $_SERVER['REQUEST_URI'];
        // $thisURI = ;
        // dd($thisURI);
        // dd(Redirect::back()->getTargetUrl());
        // dd($_SERVER);$_SERVER['HTTP_REFERER']
        $arr = explode("/", Redirect::back()->getTargetUrl());
        $beforeURI = "";
        for($i=3; $i<count($arr); $i++){
            $beforeURI .= "/".$arr[$i];
        }
        if(isset($this->routes[$thisURI])){
            if ($this->routes[$thisURI] != $beforeURI) return redirect()->route('index');
        };
        return $next($request);
    }
}
