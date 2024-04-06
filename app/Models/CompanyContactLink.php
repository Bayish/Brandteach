<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyContactLink extends Model
{
    use HasFactory;

    protected $with = ['contactLink'];

    protected $fillable = [
        'company_id',
        'contact_link_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
