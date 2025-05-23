@extends('admin.layout')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container">
        <h1 class="mb-4">Dashboard</h1>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Projects</h5>
                        <p class="card-text display-4">{{ $projectCount }}</p>
                        <a href="{{ route('admin.projects') }}" class="btn btn-primary">Manage Projects</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Quick Actions
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <a href="{{ route('admin.projects.create') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Create New Project</h5>
                                </div>
                                <p class="mb-1">Add a new project to your portfolio</p>
                            </a>
                            <a href="{{ route('home') }}" class="list-group-item list-group-item-action" target="_blank">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">View Website</h5>
                                </div>
                                <p class="mb-1">See how your portfolio looks to visitors</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
