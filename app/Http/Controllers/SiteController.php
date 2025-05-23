<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class SiteController extends Controller
{    public function home()
    {
        $featuredProjects = Project::where('is_featured', true)->get();
        return view('home', compact('featuredProjects'));
    }
    
    public function about()
    {
        return view('about');
    }
    
    public function skills()
    {
        return view('skills');
    }
      public function portfolio()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
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
        
        // Store in session for display purposes
        session()->flash('form_data', $validatedData);
        
        return redirect()->route('contact')->with('success', 'Thank you for your message!');
    }
}
