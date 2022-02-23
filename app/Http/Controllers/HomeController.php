<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Posts;
use App\Models\Rubric;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\DocBlock\Tag;
use SebastianBergmann\Diff\Exception;

class HomeController extends Controller
{
    public function index(Request $request)
    {

//       Cookie::queue('test','Value');
//        dump(Cookie::get('test'));
//        if (Cookie::has('test')){
//            dump(Cookie::get('test'));
//        }
        Cookie::queue(Cookie::forget('test'));
        if(Cache::has('posts'))
        {
            $posts = Cache::get('posts');
        }else{
            $posts = Posts::orderBy('id','desc')->get();
            Cache::put('posts',$posts,300);
        }


//        $i = 2;
//        dd(Cache::pull('posts'));
        $title = 'Home Page';
        return view('home',compact('title','posts'));
    }

    public function reNameFunction($name){
        return str_replace(' ','',ucwords(str_replace('-',' ',$name)));
    }

    public function create()
    {

        $title = 'Create Post';
        $rubrics = Rubric::pluck('title','id')->all();
        return view('create',compact('title','rubrics'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'rubric_id' => 'integer'
        ]);

        Posts::create($request->all());

        session()->flash('success','Данные сохранены');
        return redirect()->route('home');
    }
}
