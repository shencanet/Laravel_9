<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home()
	{
    	return view('home');
    }

    public function blog()
    {
    	// consulta en base de datos
        //$posts = Post::get();todos los registros
        // $posts = Post::first();primer registro
        //$posts = Post::first(25);// 25 registro
        //dd($post);
        $posts= Post::latest()->paginate(8);
        return view('blog', ['posts' => $posts]);


    }

    public function post(Post $post)
    {


	    return view('post', ['post' => $post]);
    }
}
