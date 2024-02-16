<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'name',
        'count_of_lessons',
        'start'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function students(){
        return $this->hasMany(StudentGroup::class);
    }

    public function teachers(){
        return $this->hasMany(TeacherGroup::class);
    }
}
