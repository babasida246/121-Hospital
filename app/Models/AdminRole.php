<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'permission',
        'is_system',
    ];

    protected $hidden = [
        'name',
        'code',
        'description',
        'permission',
        'is_system',
    ];
}
