<?php

// Modelo para la tabla 'project_technology'
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTechnology extends Model
{
    use HasFactory;

    protected $table = 'project_technology';

    protected $fillable = [
        'Project_ID',
        'Technology_ID'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function knowledge()
    {
        return $this->belongsTo(Knowledge::class);
    }
}
