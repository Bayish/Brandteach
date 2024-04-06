<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyContentMediaLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'path',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
