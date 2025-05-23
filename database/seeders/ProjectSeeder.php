<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'E-Commerce Website',
            'description' => 'A full-featured online store with product catalog, shopping cart, and checkout process.',
            'image' => 'assets/jpeg/project-mockup-example.jpeg',
            'tech_stack' => 'HTML, CSS, JavaScript, Laravel, MySQL',
            'github_url' => 'https://github.com/johndoe/ecommerce',
            'live_url' => 'https://ecommerce-demo.example.com',
            'is_featured' => true
        ]);

        Project::create([
            'title' => 'Social Media App',
            'description' => 'A social networking application with real-time messaging and user profiles.',
            'image' => 'assets/jpeg/project-mockup-example.jpeg',
            'tech_stack' => 'React, Node.js, Express, MongoDB',
            'github_url' => 'https://github.com/johndoe/social-app',
            'live_url' => 'https://social-app-demo.example.com',
            'is_featured' => true
        ]);

        Project::create([
            'title' => 'Task Management System',
            'description' => 'A productivity app for managing projects, tasks, and team collaboration.',
            'image' => 'assets/jpeg/project-mockup-example.jpeg',
            'tech_stack' => 'Vue.js, Laravel, MySQL, Redis',
            'github_url' => 'https://github.com/johndoe/task-manager',
            'live_url' => 'https://taskmanager-demo.example.com',
            'is_featured' => false
        ]);
    }
}
