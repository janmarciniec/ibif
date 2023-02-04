<?php

namespace App\Http\Controllers;

class AdminPanelController extends Controller
{
    public function index()
    {
        $this->authorize('view', [AdminPanel::class]);
        
        return view('adminPanel.index');
    }
}
