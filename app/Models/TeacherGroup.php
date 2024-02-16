<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherGroup extends Model
{
    use HasFactory;
    protected $with = ['group'];

    protected $fillable = [
        'teacher_id',
        'group_id'
    ];

    public function teacher() {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
