<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function show()
    {
        $title = 'About Page';
        $h1 = '<h1>about page</h1>';
        return view('page.about',compact('title','h1'));
    }
}
