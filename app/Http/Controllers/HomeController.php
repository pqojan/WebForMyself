<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use PDO;

class HomeController extends Controller
{
    public function index()
    {
        dump($_ENV['DB_DATABASE']);
        // $query = DB::insert('INSERT INTO posts (title, content) VALUES (?, ?)', ['title 5', 'Lorem ipsum s...']);
        // var_dump($query);
        // $user = DB::select('SELECT * FROM posts WHERE id > ?',['2']);
        // DB::delete('DELETE FROM posts WHERE id = ?', [1]);

        // DB::beginTransaction(); 
        // try{
        //     DB::update('UPDATE posts set created_at = ? where created_at IS null', [now()]);
        //     DB::update('UPDATE posts set updated_at = ? where updated_at2 IS null', [now()]);
        // DB::commit();
        // }
        // catch(\Exception $e){
        //  DB::rollBack();
        //  echo $e->getMessage();
        // };
            
        // return $user;
        // return view('home', ['name'=>$user]);

        // $data = DB::table('city')->select('ID','Name','Population')->where('ID','<', '5')->get();
        // $data = DB::table('city')->select('ID','Name','Population')->limit(5)->pluck('Name','ID');
        // $data = DB::table('country')->count();

        // $data = DB::table('country')->count();
        // dd($data) ;
        
        // $posts = new Post();
        // $posts->title = 'title 1';
        // $posts->content = 'Lorem ipsum...';
        // $posts->save();
        
        // $data = Country::all();
        // $data = Country::limit(5)->get();

        // $data = City::find(5);
        // $data = Country::find('ARM');

        // Post::create(['title' => 'title 6', 'content' => 'lorem ipsum 6']);

        // $data = Post::find(5);
        // $data->fill(['title'=>'filled']);
        // $data->save();
        // dd($data);

        //  Post::where('id','>','5')->update(['title' => 'updated']);


        // $delete = Post::find(1);
        // if($delete == true){
        //     $delete->delete();
        // }
        
        
        // return view('home',['data' => $data]);
        
        // dd($data);

        // $post = Post::find(3);
        // dump($post->title, $post->rubric->title);
        // $rubric = Rubric::find(1);
        // dump($rubric->title, $rubric->post->title);

        // $rubric = Rubric::find(1)->posts;
        // dump($rubric);

        // $posts = Post::with('rubric')->where('id','>','3')->get();
        // foreach ($posts as $key) {
        //     dump($key->title, $key->rubric->title);
        // }

        // $posts = Post::find(3);
        // dump($posts->title);
        // foreach ($posts->tags as $key) {
        //     dump($key->title);
        // }


        $title = 'Home Page'; 
        $h1 = '<h1>home page</h1>';
        return view('home', compact('title', 'h1'));
    }

    public function test()
    {
        return __METHOD__;
    }
}
