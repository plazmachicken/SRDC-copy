<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilInfo extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function findByUsernameLike(string $username): ?\Illuminate\Database\Eloquent\Collection
    {
        return self::whereHas('user', function ($query) use ($username) {
            $query->where('username', 'like', "%{$username}%");
        })->get(); // Changed to get() to return all matching forms
    }
}
