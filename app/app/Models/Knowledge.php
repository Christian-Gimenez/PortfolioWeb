<?php
// Modelo para la tabla 'knowledge'

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $table = 'knowledge';

    protected $fillable = [
        'Technology',
        'Description'
    ];
}
