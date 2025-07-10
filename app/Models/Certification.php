<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'issuer', 'issue_date', 'certificate_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
