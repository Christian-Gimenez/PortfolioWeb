<?php

// Modelo para la tabla 'project'
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'Title',
        'Description',
        'iframe',
        'URL_GitHub',
        'Co_Authors'
    ];
}
