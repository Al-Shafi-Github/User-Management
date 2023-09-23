<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path',
        'first_name',
        'last_name',
        'bio'
    ];
}
