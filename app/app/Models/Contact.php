<?php
// Modelo para la tabla 'contact'

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'Name',
        'Email',
        'Subject',
        'Body'
    ];
}
