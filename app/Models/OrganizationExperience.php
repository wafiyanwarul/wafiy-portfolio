<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationExperience extends Model
{
    use HasFactory;
    protected $table = 'organization_experiences'; // Explicitly set table name
    protected $fillable = ['organization_name', 'role', 'start_date', 'end_date', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
