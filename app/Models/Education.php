<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'education'; // Explicitly set table name
    protected $fillable = ['institution', 'degree', 'start_year', 'end_year', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
