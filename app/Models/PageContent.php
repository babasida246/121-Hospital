<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageContent extends Model
{
    use HasFactory;

    protected $table = '';

    //Primary key setup
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable=[
        'page_id',
        'content',
        'content_type',
        'location',
        'imagelist',
        'attach_list'
    ];

    protected $hidden=[];    

    public function page_id(){
        return $this->hasOne(Page::class);
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::Uuid();
        });
    }
}
