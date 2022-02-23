<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Posts;
use App\Models\Rubric;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\DocBlock\Tag;
use SebastianBergmann\Diff\Exception;

class HomeController extends Controller
{
    public function index(Request $request)
    {
//        $request->session()->put('test','Test value');
//        session(['cart' =>
//            [
//                ['cart_id' => 1, 'title' => 'Product 1'],
//                ['cart_id' => 2,'title' => 'Product 2'],
//            ]]);

//        dump($request->session()->get('cart')[1]['title']);
//        dump(session('cart')[1]);

//        session()->push('cart',['cart_id' => 3,'title'=> 'Product 3']);

//          dump($request->session()->pull('test'));
//        dump(session()->forget('test'));

//        session()->pull('cart.1');
//        $i = 1;
//        session()->forget('cart.' .$i);
//        session()->flush();

//        dump($request->session()->all());
        dump(session()->all());
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
//        $rules = [
//            'title' => 'required|min:5|max:255',
//            'content' => 'required',
//            'rubric_id' => 'integer'
//        ];
//        $message = [
//            'title.required' => 'Заполните поле названия',
//            'title.min' => 'Поле должно быть заполнено минимум 5 символами',
//            'title.max' => 'Поле должно быть заполнено максимум 255 символами',
//            'content.required' => 'Заполните поле содержимого',
//            'rubric_id.integer' => 'Выберите рубрику',
//        ];
//        $validate = \Illuminate\Support\Facades\Validator::make($request->all(),$rules,$message)->validate();
        Posts::create($request->all());
        session()->flash('success','Данные сохранены');
        return redirect()->route('home');
    }
}
