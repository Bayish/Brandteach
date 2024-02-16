<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\City;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Course;
use App\Models\Group;
use App\Models\Language;
use App\Models\Role;
use App\Models\StudentGroup;
use App\Models\TeacherGroup;
use App\Models\User;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherRole = Role::create(['name' => 'teacher']);
        $studentRole = Role::create(['name' => 'student']);
        Role::create(['name' => 'moderator']);

        Country::factory()->count(5)->create();
        City::factory()->count(5)->create();
        Language::factory()->count(1)->create();
        Address::factory()->count(20)->create();
        Contact::factory()->count(20)->create();
        $companies = Company::factory()->count(5)->create();
        foreach($companies as $key=>$company){
            Course::factory()->count(10)->create([
                'company_id' => $company->id,
            ]);

            $courses = Course::all();

            foreach($courses as $keyCourse=>$course){
                if($key==1 and $keyCourse == 1){
                    User::factory()->create([
                        'name' => 'Baiysh',
                        'surname' => 'parpiev',
                        'email' => 'bp@gmail.com',
                        'password' => 'test',
                        'role_id' => $teacherRole->id,
                        'company_id' => $company->id,
                    ]);
                }

                $teacher = User::factory()->create([
                    'role_id' => $teacherRole->id,
                    'company_id' => $company->id,
                ]);

                $group = Group::factory()->create([
                    'course_id' => $course->id,
                ]);

                TeacherGroup::create([
                    'teacher_id' => $teacher->id,
                    'group_id' => $group->id,
                ]);

                $students = User::factory()->count(20)->create([
                    'role_id' => $studentRole->id,
                    'company_id' => $company->id,
                ]);

                foreach($students as $student){
                    StudentGroup::create([
                        'student_id' => $student->id,
                        'group_id' => $group->id,
                    ]);
                }
            }
        }
    }
}
