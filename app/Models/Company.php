<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $with = ['membership', 'contactLinks', 'contentMediaLinks'];

    protected $fillable = [
        'name',
        'description',
        'active',
        'logo',
        'membership_id',
        'membership_until',
        'country_id',
        'city_id',
        'street',
        'house_number',
        'phone_number',
    ];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function contactLinks()
    {
        return $this->hasMany(CompanyContactLink::class);
    }

    public function contentMediaLinks()
    {
        return $this->hasMany(CompanyContentMediaLink::class);
    }
}
