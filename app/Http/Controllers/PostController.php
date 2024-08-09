<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {



        $posts = Post::latest()->paginate();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
        
            'description' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('posts.index');
    }

    public function edit(Post $post){
        return view('posts.edit',[
            'post' => $post , 
        ]);
    }

    public function update(Request $request, Post $post)
    {

        $request->validate([
            'title' => 'required',
        
            'description' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('posts.index');
    }


    public function destroy(Post $post){
       
        $post->delete();

        return redirect()->route('posts.index')->with('success','Post deleted successfully');
    }


    public function view(Post $post){
       
        return view('posts.view',[
            'post'=> $post,
        ]);

    }

}
