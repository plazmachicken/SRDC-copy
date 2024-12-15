<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'mobile',
        'address',
        'image',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->hasOne(Role::class, 'id', 'role');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the notifications for the user.
     */public function notifications()
    {
        return $this->hasMany(DatabaseNotification::class);
    }

    public function isSuperAdmin()
    {
        // Implement logic to determine if the user is a super-admin
        return $this->role == '1'; // Assuming 'role' is a column in your users table that stores the role of the user
    }

    public function isSubAdmin()
    {
        // Implement logic to determine if the user is a sub-admin
        return $this->role == '2'; // Assuming 'role' is a column in your users table that stores the role of the user
    }

}
