<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'role_id',
        'company_id',
        'language_id',
        'contact_id',
        'country_id',
        'city_id',
        'street',
        'number',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    /**
     * The relationships to always load with the model.
     *
     * @var array<string>
     */
    protected $with = ['company', 'contact', 'role'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Check if the user is a teacher.
     *
     * @return bool
     */

    public function isTeacher():bool
    {
        return $this->role->name == 'teacher';
    }


    /**
     * Check if the user is a student.
     *
     * @return bool
     */

    public function isStudent():bool
    {
        return $this->role->name == 'student';
    }

    /**
     * Check if the user is a moderator.
     *
     * @return bool
     */

    public function isModerator():bool
    {
        return $this->role === 'moderator';
    }

    public function hasPermission($permission)
    {
        return $this->role->permissions->contains('name', $permission);
    }

    public function studentGroups()
    {
        return $this->hasMany(StudentGroup::class, 'student_id');
    }

    public function teacherGroups()
    {
        return $this->hasMany(TeacherGroup::class, 'teacher_id');
    }

//    protected static function booted()
//    {
//        static::retrieved(function ($user) {
//            if ($user->role->name === 'student') {
//                $user->load('studentGroups');
//            }else if ($user->role->name === 'teacher') {
//                $user->load('teacherGroups');
//            }
//        });
//
//    }
}
