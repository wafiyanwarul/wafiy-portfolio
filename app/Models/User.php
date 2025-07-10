<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = 'users'; // Explicitly set table name

    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function aboutMe()
    {
        return $this->hasOne(AboutMe::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function organizationExperiences()
    {
        return $this->hasMany(OrganizationExperience::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function techStacks()
    {
        return $this->hasMany(TechStack::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }
}
