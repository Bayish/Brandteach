<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroupMember extends Model
{
    use HasFactory;
    protected $with = ['member'];

    protected $fillable = [
        'chat_group_id',
        'member_id',
        'role'
    ];

    public function chatGroup()
    {
        return $this->belongsTo(ChatGroup::class);
    }

    public function member()
    {
        return $this->belongsTo(User::class, 'member_id');
    }

}
