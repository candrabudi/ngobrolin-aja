<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessageImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_message_id',
        'file_name',
        'file_path',
        'file_extension',
    ];
    
}
