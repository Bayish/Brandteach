<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    use HasFactory;
    protected $with = ['group'];

    protected $fillable = [
        'student_id',
        'group_id',
        'payment'
    ];

    public function student() {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function group(){
        return $this->belongsTo(Group::class);
    }
}
