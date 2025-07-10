<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects'; // Explicitly set table name
    protected $fillable = ['title', 'category', 'description', 'tech_stack', 'live_link', 'github_link'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
