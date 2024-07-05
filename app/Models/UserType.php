<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = [
        'central_id', 'parent_id', 'logo_image', 'label', 'color', 'type', 'is_show',
    ];
}