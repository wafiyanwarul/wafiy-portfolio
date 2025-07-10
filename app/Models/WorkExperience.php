<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $table = 'work_experiences';
    protected $fillable = ['company', 'position', 'start_date', 'end_date', 'description', 'tech_stack'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
