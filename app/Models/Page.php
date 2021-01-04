<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $table = '';

    //Primary key setup
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'catalogue_id',
        'title',
        'slug',
    ];

    protected $hidden = [];

    public function catalogue_id()
    {
        return $this->hasOne(Catalogue::class);
    }

    public function slug(){
        return $this->hasOne(navgiation::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::Uuid();
        });
    }
}
