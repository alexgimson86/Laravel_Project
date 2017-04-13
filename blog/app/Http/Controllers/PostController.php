<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Session;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        $user_id = session('user_id');

        return view('posts.index', compact('posts', 'user_id'));
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
