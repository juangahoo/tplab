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
        $posts = Post::orderBy('created_at', 'DESC')->paginate(12);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $this->validate(request(), [
            'title' => 'required', 
            'body' => 'required',
            'file' => 'required'
        ]);
       
        auth()->user()->publish(
            new Post(request(['title', 'body', 'file']))
        );

        return redirect('/');
    }

}
