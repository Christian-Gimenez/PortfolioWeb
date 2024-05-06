<?php

// Modelo para la tabla 'admin_user'
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $table = 'admin_user';

    protected $fillable = [
        'User_Name',
        'User_Password'
    ];

    protected $hidden = [
        'User_Password',
    ];
}
