<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $post = Post::all();

        return view('post.index')->with(['post' => $post]);
    }

    public function store(Request $request){
        Post::create([
            'title' => $request->getPort('title'),
            'body' => $request->getPort('body')
        ]);
        return back();
    }
    
    public function get_post($id){
        $post = Post::find($id);

        if($post == null)
            return response(['message' => 'post not found'], 404);

        return view('post.detail')->with(['post' => $post]);
    }
}
