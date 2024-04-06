<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatDirect extends Model
{
    use HasFactory;
    protected $with = ['firstMember', 'secondMember', 'messages'];
    protected $fillable = [
        'first_member_id',
        'second_member_id'
    ];

    public function firstMember()
    {
        return $this->belongsTo(User::class, 'first_member_id');
    }

    public function secondMember()
    {
        return $this->belongsTo(User::class, 'second_member_id');
    }

    public function messages()
    {
        return $this->hasMany(ChatDirectMessage::class);
    }
}
