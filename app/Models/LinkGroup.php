<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkGroup extends Model
{
    use HasFactory;

    protected $with = ['link'];

    protected $fillable = [
        "contact_id",
        "link_id",
    ];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}
