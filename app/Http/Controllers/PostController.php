<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', [Post::class]);
        
        $posts = \App\Models\Post::all();
        
        return view('post.index', compact('posts'));
    }
    
    public function create()
    {
        $this->authorize('create', [Post::class]);
        
        return view('post.create');
    }
    
    public function store(Request $request) {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
        ]);
        
        \App\Models\Post::create($data);
        
        $notification = array(
                    'message' => 'Post created',
                    'alert-type' => 'success'
                );

        return redirect()->route('post.index')->with($notification);
    }
}
