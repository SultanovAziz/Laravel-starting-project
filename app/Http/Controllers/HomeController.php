<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Posts;
use App\Models\Rubric;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tag;
use SebastianBergmann\Diff\Exception;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home Page';
//        $posts = Posts::all();
        $posts = Posts::orderBy('id','desc')->get();
        return view('home',compact('title','posts'));
    }

    public function reNameFunction($name){
        return str_replace(' ','',ucwords(str_replace('-',' ',$name)));
    }

    public function create()
    {
        $title = 'Create Post';
        $posts = Rubric::pluck('title','id')->all();
        return view('create',compact('title','posts'));
    }

    public function store(\Illuminate\Http\Request $request)
    {
        Posts::create($request->all());
        return redirect()->route('home');
    }
}
