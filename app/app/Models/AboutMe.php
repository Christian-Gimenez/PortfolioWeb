<?php

// Modelo para la tabla 'about_me'
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $table = 'about_me';

    protected $fillable = [
        'Full_Name',
        'Bio',
        'Skills',
        'Interests',
        'Languages',
        'Location'
    ];
}
