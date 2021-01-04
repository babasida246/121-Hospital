<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Navigation extends Model
{
    use HasFactory;

    protected $table = 'navigations';

    protected $primaryKey = 'id';

    protected $keyType = 'string';
    
    protected $fillable = [
        'id', 'title', 'parent_id','route_name'
    ]; 

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::Uuid();
        });
    }
}
