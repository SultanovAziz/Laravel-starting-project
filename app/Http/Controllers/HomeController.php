<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Posts;
use App\Models\Rubric;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tag;
use SebastianBergmann\Diff\Exception;

class HomeController extends Controller
{
    public function index()
    {



//        $rubric = Posts::find(2)->rubric;
//        dd($rubric->title);
//        $posts = Rubric::find(1)->posts;
//        dd($posts[0]->content);
//        $post = [];
//        foreach (Posts::get() as $poss) {
//            $post[]= ['post' => $poss->title,'rubric' => $poss->rubric->title];
//        }
//        //жадная загрузка
//        foreach (Posts::with('rubric')->get() as $poss) {
//            $post[]= ['post' => $poss->title,'rubric' => $poss->rubric->title];
//        }
//        dd($post);

//        $posts = Rubric::find(4)->posts()->select('title','content')->where('id','>',2)->get();
//        dd($posts);
//        $post = Posts::find(2);
//        dump($post->title);
//        foreach ($post->tag as $tag) {
//            dump($tag->title);
//        }
        $tag = \App\Models\Tag::find(1);
        dump($tag->title);
        foreach ($tag->post as $posts) {
            dump($posts->title);
        }
        return view('home',['res' => 5,'name' => 'Aziz']);
    }

    public function reNameFunction($name){
        return str_replace(' ','',ucwords(str_replace('-',' ',$name)));
    }
}
