<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLink extends Model
{
    use HasFactory;
    protected $with = ['socialMedia'];

    protected $fillable = [
        'social_media_id',
        'link',
    ];

    public function socialMedia()
    {
        return $this->belongsTo(SocialMedia::class);
    }
}
