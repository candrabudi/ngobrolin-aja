<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    protected $fillable = [
        'name', 'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(TaskType::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(TaskType::class, 'parent_id');
    }
}