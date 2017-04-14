<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index(Request $request){

        $user_id = null;
        $posts = null;
        
        if(!is_null($request->session()->get('user_id'))){

            $posts = Post::all();
            
            $user_id = $request->session()->get('user_id');

        }
        if($user_id)
            return view('posts.index', compact('posts', 'user_id'));

        else
            return redirect()->action('UserController@login');
        
    }

    public function create(){
        
        return view('posts.create');
    }

    public function store() {

        // create a new post using the request data
        //save it to the db
        //redirect to application

        //validate, make sure not null

        $this->validate( request(), [

            'title' => 'required|max:30',

            'body' => 'required|min:15'
        ]);

        Post::create( request(['title','body']));
        $posts = Post::all();

        return view('posts.index', compact('posts') );

    }

    public function show($id){

        $post = Post::find($id);

        return view('posts.post', compact('post'));
    }

    public function about(){
        
    }
}
