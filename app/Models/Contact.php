<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    /**
     * The relationships to always load with the model.
     *
     * @var array<string>
     */
    protected $with = ['linksGroup'];

    protected $fillable = [
        "phone_number",
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function linksGroup()
    {
        return $this->hasMany(LinkGroup::class);
    }
}
