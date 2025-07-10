<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $table = 'project_images'; // Explicitly set table name
    protected $fillable = ['project_id', 'image_url', 'caption'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
