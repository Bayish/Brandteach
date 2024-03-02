<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\ChatGroup;
use App\Models\ChatGroupMember;
use App\Models\ChatGroupMessage;
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
                    $firstTeacher = User::factory()->create([
                        'name' => 'First',
                        'surname' => 'Teacher',
                        'email' => 'first@teacher.com',
                        'password' => 'test',
                        'role_id' => $teacherRole->id,
                        'company_id' => $company->id,
                    ]);

                    $firstStudent = User::factory()->create([
                        'name' => 'First',
                        'surname' => 'Student',
                        'email' => 'first@student.com',
                        'password' => 'test',
                        'role_id' => $studentRole->id,
                        'company_id' => $company->id,
                    ]);

                    $secondStudent = User::factory()->create([
                        'name' => 'Second',
                        'surname' => 'Student',
                        'email' => 'second@student.com',
                        'password' => 'test',
                        'role_id' => $studentRole->id,
                        'company_id' => $company->id,
                    ]);

                    $chatGroup = ChatGroup::factory()->create([
                        'author_id' => $firstTeacher->id,
                    ]);

                    foreach(array($firstStudent, $firstTeacher, $secondStudent) as $member) {
                        ChatGroupMember::create([
                            'chat_group_id' => $chatGroup->id,
                            'member_id' => $member->id,
                            'role' => 'member'
                        ]);

                        ChatGroupMessage::create([
                            'chat_group_id' => $chatGroup->id,
                            'sender_id' => $member->id,
                            'content' => 'membyddfdfvfdvdfyvdfyver',
                            'type' => 'text'
                        ]);
                    }

                }

                $teacher = User::factory()->create([
                    'role_id' => $teacherRole->id,
                    'company_id' => $company->id,
                ]);

                $group = Group::factory()->create([
                    'course_id' => $course->id,
                ]);



                TeacherGroup::factory()->create([
                    'teacher_id' => $teacher->id,
                    'group_id' => $group->id,
                ]);

                $students = User::factory()->count(20)->create([
                    'role_id' => $studentRole->id,
                    'company_id' => $company->id,
                ]);

                foreach($students as $student){
                    StudentGroup::factory()->create([
                        'student_id' => $student->id,
                        'group_id' => $group->id,
                    ]);
                }
            }
        }
    }
}
