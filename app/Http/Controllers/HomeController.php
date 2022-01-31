<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
//        dump($_ENV["MY_SETTING"]);
//        dump(config('database.connections.mysql.username'));
//
//        dump($_ENV);

        return view('home',['res' => 5,'name' => 'Aziz']);
    }
}
