<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

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
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];    
    
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Str::Uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    
}
