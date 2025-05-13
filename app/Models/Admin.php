<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';
    protected $guard = 'admin'; // Explicitly set guard to admin

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function setPasswordAttribute($value)
    {
        if ($value) {
            $this->attributes['password'] = Hash::make($value);
        }
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function newsCreated()
    {
        return $this->hasMany(News::class, 'created_by');
    }

    public function newsUpdated()
    {
        return $this->hasMany(News::class, 'updated_by');
    }

    public function metaProfilesCreated()
    {
        return $this->hasMany(MetaProfile::class, 'created_by');
    }

    public function metaProfilesUpdated()
    {
        return $this->hasMany(MetaProfile::class, 'updated_by');
    }

    public static function findByEmail($email)
    {
        return static::where('email', strtolower($email))->first();
    }
}
