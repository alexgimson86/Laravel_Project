<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('posts.index');
    }

    public function create(){
        
        return view('posts.create');
    }

    public function store() {

        // create a new post using the request data
        //save it to the db
        //redirect to application

        //validate, make sure not null

        $this->validate(request(), [

            'title' => 'required|max:15',

            'body' => 'required|min:15'
        ]);

        \App\Post::create( request(['title','body']));

        $posts = App\Post::all();

        return redirect('/', compact('posts'));
    }
}
