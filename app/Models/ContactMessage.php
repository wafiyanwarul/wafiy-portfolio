<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;
    protected $table = 'contact_messages'; // Explicitly set table name
    protected $fillable = ['name', 'email', 'message'];
}
