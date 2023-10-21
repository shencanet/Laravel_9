<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function home(){
        return view('home');
    }

    public function blog(){

        return view('blog', ['posts' => $posts]);
    }

    public function post($slug){
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
