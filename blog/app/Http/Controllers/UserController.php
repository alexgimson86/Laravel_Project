<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Session;
use \App\User;

class UserController extends Controller
{
    
    
    public function logIn (Request $request) {

        $user_id = $request->session()->get('user_id');

        return view('/', compact('user_id'));

    }
}
