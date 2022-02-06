<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        dump($_ENV["MY_SETTING"]);
//        dump(config('database.connections.mysql.username'));
//
////        dump($_ENV);
//        for ($i = 4 ;$i<9;$i++){
//            DB::insert('INSERT INTO posts(title,content) VALUES (?,?)',["Статья $i","Hellow world $i"]);
//        }
//
//        $query = DB::insert('INSERT INTO posts(title,content) VALUES (?,?)',["Статья 3",'Hellow world']);
//        var_dump($query);

        DB::beginTransaction();
        try {
            DB::update("UPDATE posts SET created_at=:created_date WHERE created_at IS NULL",['created_date' => NOW()]);
            DB::update("UPDATE posts SET updated_at=:updated_date WHERE updated_at IS NULL",['updated_date' => NOW()]);
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            echo $e->getMessage();
        }



        DB::update('UPDATE posts SET content=:content WHERE title=:name',['content'=>'Ок ВСЕ ХОРОШО','name' => 'Статья 5']);
        $posts = DB::select('SELECT * FROM posts WHERE id > :id',['id' => 2]);
        return dd($posts);



//        $data = DB::table('country')->limit(5)->get();
//        dump($data);

        return view('home',['res' => 5,'name' => 'Aziz']);
    }
}
