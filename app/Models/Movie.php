<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'length',
        'story',
        'releaseDate',
        'country',
        'language',
        'production_studio',
        'budget',
        'director',
        'writer'
    ];
}
