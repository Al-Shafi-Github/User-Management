<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleries extends Model
{
    public $table = 'gallery';
    use HasFactory;
    protected $fillable= [
        'imagepath'
    ];
}
