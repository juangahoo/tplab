<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (auth()->user()->permission == 'ADMIN') {
            $posts = Post::orderBy('created_at', 'DESC')
                ->paginate(12);
        } else {
            $posts = Post::orderBy('created_at', 'DESC')
                ->where('user_id', auth()->user()->id)
                ->paginate(12);
        }

        return view('admin.posts.index', compact('posts'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required', 
            'body' => 'required',
            'file' => 'required'
        ]);
        
        $post = Post::find($id);

        $pathOld = null;

        if($post->file){
            $pathOld = $post->file;
        }
        
        $post->fill($request->all())->save();
        
        //Acá está el código con el que debería guardarse
        
        if($post->file){
            $path = Storage::disk('public')->put('images', $post->file);
            $post->fill(['file' => asset('storage/' . $path)])->save();
        }

        if($pathOld){
            $shortPath = substr ( $pathOld , 29);
            $delete = Storage::disk('public')->delete($shortPath);
        }
        

        return redirect()->route('post.index', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if($post->file){
            $path = $post->file;
        }
        
        $post->delete();

        if($post->file){
            $shortPath = substr ( $path , 29);
            $delete = Storage::disk('public')->delete($shortPath);
        }

        return back();
    }
}
