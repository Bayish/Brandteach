<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroupMessageStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_group_message_id',
        'member_id',
        'viewed',
    ];
}
