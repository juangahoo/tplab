<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Post $post, Request $request){

        $this->validate(request(), [
            'title' => 'required', 
            'body' => 'required',
            'file' => 'nullable'
        ]);
        
        

        auth()->user()->publish(
            new Post(request(['title', 'body', 'file']))
        );

        return redirect('/');
    }

}
