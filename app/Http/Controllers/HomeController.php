<?php


namespace App\Http\Controllers;


use App\Models\Posts;
use Illuminate\Support\Facades\DB;

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

        $post = new Posts();
        $post->title = 'New page';
        $post->save();

        return view('home',['res' => 5,'name' => 'Aziz']);
    }
}
