<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        return view('welcome',
            compact('posts')
        );
    }
    public function singlePost($id)
    {
        $post = Post::find($id);
        return view('singlePost',compact(
            'post'
        ));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
