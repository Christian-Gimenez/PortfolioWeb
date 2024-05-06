<?php

// Modelo para la tabla 'experience'
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experience';

    protected $fillable = [
        'Job',
        'Company',
        'Start_Date',
        'End_Date',
        'Location',
        'Description'
    ];
}
