<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $fillable = [
        'user_id', 'central_id', 'parent_id', 'sub_parent_id', 'coordinator_id', 'sub_coordinator_id',
        'structure_task_id', 'latitude', 'longitude', 'description', 'status', 'position',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}