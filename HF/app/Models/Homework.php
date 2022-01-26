<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'class',
        'url',
        'evaluation',
        'points',
    ];

    protected $visible = [
        'id',
        'evaluation',
        'points',
    ];
}
