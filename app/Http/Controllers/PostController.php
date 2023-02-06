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
    
    public function store(Request $request, String $lang) {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
        ]);
        
        \App\Models\Post::create($data);

        $notification = array(
                    'message' => $lang=="en"?'Post created':"Post został utworzony",
                    'alert-type' => 'success'
                );

        return redirect()->route('post.index', $lang)->with($notification);
    }
    
    public function destroy(\App\Models\Post $post)
    {
        $this->authorize('delete', [Post::class]);
        
        $post->delete();
        
        $notification = array(
                    'message' => 'The post has been deleted.',
                    'alert-type' => 'success'
                );

        return redirect()->route('adminPanel.index')->with($notification);
    }
}
