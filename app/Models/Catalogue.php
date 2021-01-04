<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catalogue extends Model
{
    use HasFactory;

    protected $table = '';

    //Primary key setup
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable=[
        'parent_id',
        'name',
    ];

    protected $hidden=[];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::Uuid();
        });
    }
}
