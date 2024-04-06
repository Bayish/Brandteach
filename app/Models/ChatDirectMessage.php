<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatDirectMessage extends Model
{
    use HasFactory;

    protected $with = ['sender'];

    protected $fillable = [
        'chat_direct_id',
        'sender_id',
        'content',
        'type',
        'viewed'
    ];
    public function chatDirect()
    {
        return $this->belongsTo(ChatDirect::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
