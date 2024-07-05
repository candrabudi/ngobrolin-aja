<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'password',
        'role_id',
        'is_admin',
        'status',
        'expired_at',
        'is_online', 
        'last_seen',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'expired_at' => 'date',
    ];

    /**
     * Get the user's profile associated with the user.
     */
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
     * Get the user's roles.
     */
    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    /**
     * Get the user's sessions.
     */
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }

    /**
     * Get the user's locations.
     */
    public function locations()
    {
        return $this->hasMany(UserLocation::class);
    }

    /**
     * Get the user's data.
     */
    public function data()
    {
        return $this->hasOne(UserData::class);
    }
}
