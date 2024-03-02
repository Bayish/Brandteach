<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatGroup extends Model
{
    use HasFactory;
    protected $with = ['author', 'members', 'messages'];


    protected $fillable = [
        'name',
        'description',
        'author_id'
    ];
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->hasMany(ChatGroupMember::class);
    }

    public function messages()
    {
        return $this->hasMany(ChatGroupMessage::class);
    }
}
