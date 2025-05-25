<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        return view('skills');
    }    public function portfolio()
    {
        return view('portfolio');
    }

    public function project1()
    {
        return view('project1');
    }
    public function project2()
    {
        return view('project2');
    }
public function project3()
    {
        return view('project3');
    }
    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);
        
        // Just collect inputs, no backend email sending as per requirements
        
        return redirect()->route('contact')->with('success', 'Thank you for your message!');
    }
}
