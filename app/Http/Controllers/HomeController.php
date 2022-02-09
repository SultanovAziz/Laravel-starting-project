<?php


namespace App\Http\Controllers;


use App\Models\Country;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Diff\Exception;

class HomeController extends Controller
{
    public function index()
    {

        $tjk = DB::select('SELECT * FROM country WHERE Code LIKE :tjk',['tjk' => 'TJK']);
        dump($tjk);
//        $data = DB::table('country')->limit(5)->get();
//        $data = DB::table('country')->select('Code','Name')->limit(5)->get();
//        $data = DB::table('country')->select('Code','Name')->first();
//        $data = DB::table('country')->select('Code','Name')->orderBy('Name','DESC')->first();
//        $data = DB::table('city')->select('ID','Name' )->find(2);
//        $data = DB::table('city')->select('ID','Name')->where('Name','LIKE','Dushanbe')->get();
//        $data = DB::table('city')->select('ID','Name')->where('Name','Dushanbe')->get();
//        $data = DB::table('city')->select('ID','Name')->where([
//            ['ID','>',1],
//            ['ID','<',5],
//        ])->get();
//        $data = DB::table('country')->limit(10)->pluck('Name','Code');
//        $data = DB::table('country')->count();
//        $data = DB::table('country')->max('Population');
//        $data = DB::table('country')->sum('Population');
//        $data = DB::table('country')->avg('Population');
//        $data = DB::table('city')->select('CountryCode')->distinct()->get();
//        $data = DB::table('city')->select('city.ID','city.Name as city_name','country.Code','country.Name as country_name')->limit(10)
//            ->join('country','city.CountryCode','=','country.Code')
//            ->orderBy('city.ID')
//            ->get();
//        dd($data);

//        $data = Country::all();
//        $data = Country::limit(5)->get();
//        $data = Country::query()->limit(5)->get();
//        $data = Country::limit(6)->get();
//        $data = Country::select('Code','Name')->where('Code','<','ALB')->get();
//        $data = Country::select('Code','Name')->where('Code','<','ALB')->offset(1)->limit(3)->get();
//        $data = Country::find('TJK');

//         $post = new Posts();
//         $post->title = 'New Posts';
//         $post->content = 'Ok.. Lets Go!!';
//         $post->save();

//        Posts::create(['title' => 'TJK','content'=> 'Tajikistan feel the frendship']);

//        $post = new Posts();
//        $post->fill(['title' => 'hellow','content' => 'ok google']);
//        $post->save();

//        $post = Posts::find(6);
//        $post->title = 'Hellow';
//        $post->content = $this->reNameFunction($post->content);
//        $post->save();

//        Posts::where([
//            ['id','>',1],
//            ['id','<',5],
//        ] )
//            ->update(['updated_at' => NOW()]);

//        $post = Posts::find(5);
//        $post->delete();

//        Posts::destroy(1,2);

        return view('home',['res' => 5,'name' => 'Aziz']);
    }

    public function reNameFunction($name){
        return str_replace(' ','',ucwords(str_replace('-',' ',$name)));
    }
}
