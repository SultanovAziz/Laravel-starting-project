<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function show()
    {
        $title = 'About Page';
        return view('page.about',compact('title'));
    }
}
