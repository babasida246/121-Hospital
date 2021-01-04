<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = '';

    //Primary key setup
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable=[];

    protected $hidden=[];
}
