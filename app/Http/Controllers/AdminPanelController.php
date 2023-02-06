<?php

namespace App\Http\Controllers;

class AdminPanelController extends Controller
{
    public function index()
    {
        $this->authorize('view', [AdminPanel::class]);
        
        $posts = \App\Models\Post::all();
        
        return view('adminPanel.index', compact('posts'));
    }
}
