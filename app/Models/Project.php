<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'tech_stack',
        'github_url',
        'live_url',
        'is_featured'
    ];
}
