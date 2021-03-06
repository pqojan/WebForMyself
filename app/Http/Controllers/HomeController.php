<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Post;
use App\Rubric;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PDO;

class HomeController extends Controller
{
    public function index(Request $request)
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

      // session()->forget('cart');
      // $request->session()->push('cart', ['id'=>'Narek']);
      // dump(session()->all());

        // Cookie::queue('test', 'test cookie', 2);
        // dump($request->cookie('test'));

        // Cache::put('name','value', 60);
        // dump(Cache::get('name'));

        
        $title = 'Home Page'; 
        $posts = Post::orderBy('id','desc')->paginate(3);
        return view('home', compact('title','posts'));
    }

    public function create()
    {
      $title = 'Creeate Post';
      $rubric = Rubric::pluck('title','id')->all();
      return view('create',compact('title','rubric'));
    }

    public function store(Request $request)
    { 
      // dump($request->input('title'));

      // $title = $request->input('title');
      // $post = new Post;
      // $post->title = $title;
      // $post->rubric_id = 1;
      // $post->save();

      $this->validate($request,[
        'title' => 'required|min:5|max:100',
        'content' => 'required',
        'rubric_id' => 'integer'
      ]);

      // $rules = [
      //   'title' => 'required|min:5|max:100',
      //   'content' => 'required',
      //   'rubric_id' => 'integer'
      // ];

      // $messages = [
      //   'title.required' => 'lracreq titl@',
      //   'title.min' => 'minimum 5 simvol',
      //   'content.requiered' => 'lracreq content@',
      //   'rubric_id.integer' => 'menak tarer'

      // ];

      // $validator = Validator::make($request->all(),$rules,$messages)->validate();

      Post::create($request->all());
      session()->flash('success','added successfully');
      // dd($request->all());
       return redirect()->route('home');
    }
}

