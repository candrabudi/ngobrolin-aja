<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_room_id',
        'from_id',
        'to_id',
        'message',
        'is_read',
        'message_type',
        'updated_at',
    ];

    public function MessageReply()
    {
        return $this->hasOne(ChatMessage::class, 'id', 'message_reply_id')
            ->select('chat_messages.id', 'full_name', 'profile_image', 'message','chat_messages.created_at')
            ->join('user_profiles as up', 'up.user_id', '=', 'chat_messages.from_id');
    }

    public function images()
    {
        return $this->hasMany(ChatMessageImage::class);
    }
}
