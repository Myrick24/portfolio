<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function project1()
    {
        return view('project-1');
    }
    
    public function project2()
    {
        return view('project-2');
    }
    
    public function project3()
    {
        return view('project-3');
    }
    
    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);
        
        // Here you would typically send an email with the contact form data
        // Mail::to('your-email@example.com')->send(new \App\Mail\ContactForm($validatedData));
        
        return redirect()->route('home', '#contact')->with('success', 'Thank you for your message. We will get back to you shortly!');
    }
}
