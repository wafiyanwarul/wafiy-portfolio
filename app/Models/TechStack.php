<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    use HasFactory;
    protected $table = 'tech_stacks';
    protected $fillable = ['name', 'icon'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
