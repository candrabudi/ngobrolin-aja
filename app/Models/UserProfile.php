<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id', 'user_type_id', 'full_name', 'national_id', 'position', 'aka_name', 'gender',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}