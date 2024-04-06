<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\ChatDirect;
use App\Models\ChatDirectMember;
use App\Models\ChatDirectMessage;
use App\Models\ChatGroup;
use App\Models\ChatGroupMember;
use App\Models\ChatGroupMessage;
use App\Models\ChatGroupMessageStatus;
use App\Models\City;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Course;
use App\Models\DirectMessage;
use App\Models\DirectMessageStatus;
use App\Models\Group;
use App\Models\Language;
use App\Models\Membership;
use App\Models\Role;
use App\Models\SocialMedia;
use App\Models\StudentGroup;
use App\Models\TeacherGroup;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

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

        $memberships = [
            ["name" => "Basic Plan", "description" => "3 courses 30 students", "price" => "1000som"],
            ["name" => "Standard Plan", "description" => "3 courses 30 students", "price" => "1000som"],
            ["name" => "Premium Plan", "description" => "3 courses 30 students", "price" => "1000som"],
            ["name" => "Enterprise Plan", "description" => "3 courses 30 students", "price" => "1000som"],
        ];

        foreach($memberships as $membership){
            Membership::create([
                "name" => $membership["name"],
                "description" => $membership["description"],
                "price" => $membership["price"],
            ]);
        }

        $socialMedias = [
            ["name" => "Instagram", "description" => "Instagram"],
            ["name" => "Facebook", "description" => "Meta Company"],
            ["name" => "Whatsapp", "description" => "it is messenger"],
        ];

        foreach($socialMedias as $socialMedia){
            SocialMedia::create([
                "name" => $socialMedia["name"],
                "description" => $socialMedia["description"],
            ]);
        }


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

                    $directChats = array(
                        array($firstTeacher, $firstStudent),
                        array($firstTeacher, $secondStudent),
                        array($firstStudent, $secondStudent),
                    );

                    foreach($directChats as $direct) {
                        $chatDirect = ChatDirect::create([
                            'first_member_id' => $direct[0]->id,
                            'second_member_id' => $direct[1]->id,
                        ]);

                        ChatDirectMessage::factory()->create([
                            'chat_direct_id' => $chatDirect->id,
                            'sender_id' => $direct[0]->id,
                            'content' => 'test test',
                            'type' => 'text'
                        ]);
                    }

                    foreach(array($firstStudent, $firstTeacher, $secondStudent) as $member) {
                        ChatGroupMember::create([
                            'chat_group_id' => $chatGroup->id,
                            'member_id' => $member->id,
                            'role' => 'member'
                        ]);

                        $message = ChatGroupMessage::create([
                            'chat_group_id' => $chatGroup->id,
                            'sender_id' => $member->id,
                            'content' => 'membyddfdfvfdvdfyvdfyver',
                            'type' => 'text'
                        ]);

                        foreach(array($firstStudent, $firstTeacher, $secondStudent) as $messageMember) {
                            if($messageMember->id != $member->id) {
                                ChatGroupMessageStatus::factory()->create([
                                    'chat_group_message_id' => $message->id,
                                    'member_id' =>$messageMember->id,
                                ]);
                            }
                        }
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
