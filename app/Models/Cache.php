<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
    protected $table = 'cache';

    protected $primaryKey = 'key';

    protected $fillable = [
        'key', 'value', 'expiration',
    ];

    protected $casts = [
        'expiration' => 'integer',
    ];
}
