<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroupMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_group_id',
        'sender_id',
        'content',
        'type'
    ];

    public function chatGroup()
    {
        return $this->belongsToMany(ChatGroup::class);
    }

    public function sender()
    {
        return $this->belongsToMany(User::class, 'sender_id');
    }

    public function messageStatuses()
    {
        return $this->hasMany(ChatGroupMessageStatus::class);
    }
}
