<?php

// Modelo para la tabla 'experience_technology'
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceTechnology extends Model
{
    use HasFactory;

    protected $table = 'experience_technology';

    protected $fillable = [
        'Experience_ID',
        'Technology_ID'
    ];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function knowledge()
    {
        return $this->belongsTo(Knowledge::class);
    }
}
