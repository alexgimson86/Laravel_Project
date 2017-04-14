<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    public function login(){

        return view('posts.login');
    }
    
    public function submit(Request $request) {

        $this->validate( $request, [
            
            'username' => 'required',

            'password' => 'required'
        ]);
        $userName = $request->username;
        $password = $request->password;

        $users = User::all();//where('user_name', $userName)->where('password', $password)->get();
        $curr = null;

        foreach($users as $user){

            if($user->user_name == $userName ){
                
                $curr = $user;

            }

        }
                
        if(isset($curr->id)){

            $user_id = $curr->id;

            $request->session()->put('user_id', $curr->id);

            $request->session()->put('user_name', $curr->name);

            $request->session()->put('email', $curr->email);

            return view('posts.index', compact('user_id'));
            
        }
        
        else
        {

            return view('posts.login');

        }
        
    }

    public function register(Request $request){

        return view('posts.login');
    }

}
