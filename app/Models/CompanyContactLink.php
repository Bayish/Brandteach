<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyContactLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'social_media_id',
        'link',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
