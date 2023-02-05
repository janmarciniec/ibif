<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function create()
    {
        return view('message.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255'],
        ]);
        
        Mail::to($data['email'])->send(new \App\Mail\ContactMessage($data['subject'], $data['message']));
        
        $notification = array(
                    'message' => 'The e-mail was sent successfully',
                    'alert-type' => 'success'
                );

        return redirect()->route('home')->with($notification);
    }
}
