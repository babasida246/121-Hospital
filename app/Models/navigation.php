<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class navigation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'title', 'parent_id','route_name'
    ]; 
}
