<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class AdminController extends Controller
{
    public function dashboard()
    {
        $projectCount = Project::count();
        return view('admin.dashboard', compact('projectCount'));
    }
    
    public function projects()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }
    
    public function createProject()
    {
        return view('admin.projects.create');
    }
    
    public function storeProject(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'is_featured' => 'boolean',
        ]);
        
        Project::create($validatedData);
        
        return redirect()->route('admin.projects')->with('success', 'Project created successfully');
    }
    
    public function editProject(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }
    
    public function updateProject(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'tech_stack' => 'nullable|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
            'is_featured' => 'boolean',
        ]);
        
        $project->update($validatedData);
        
        return redirect()->route('admin.projects')->with('success', 'Project updated successfully');
    }
    
    public function deleteProject(Project $project)
    {
        $project->delete();
        
        return redirect()->route('admin.projects')->with('success', 'Project deleted successfully');
    }
}
