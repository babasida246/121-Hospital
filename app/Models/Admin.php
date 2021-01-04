<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins';

    //Primary key setup
    public $incrementing = false;
    protected $keyType = 'string';

    public function role_id()
    {
        return $this->hasOne(AdminUserRole::class);
    }

    public function throttle()
    {
        return $this->hasMany(AdminUserThrottle::class);
    }

    public function role()
    {
        return $this->hasMany(AdminUserRole::class);
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id',        
        'is_superuser'
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'is_superuser',
        'role_id'
    ];

    protected $appends = [
        'profile_photo_url',
    ];
}
