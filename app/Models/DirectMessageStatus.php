<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectMessageStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'direct_message_id',
        'receiver_id',
        'viewed',
    ];

    public function directMessage()
    {
        return $this->belongsTo(DirectMessage::class, );
    }

    public function receiver()
    {
        return $this->belongsTo(User::class);
    }
}
