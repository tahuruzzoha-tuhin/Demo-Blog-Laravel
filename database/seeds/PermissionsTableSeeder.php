<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'course_create',
            ],
            [
                'id'    => 39,
                'title' => 'course_edit',
            ],
            [
                'id'    => 40,
                'title' => 'course_show',
            ],
            [
                'id'    => 41,
                'title' => 'course_delete',
            ],
            [
                'id'    => 42,
                'title' => 'course_access',
            ],
            [
                'id'    => 43,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 44,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 45,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 46,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 47,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 48,
                'title' => 'test_create',
            ],
            [
                'id'    => 49,
                'title' => 'test_edit',
            ],
            [
                'id'    => 50,
                'title' => 'test_show',
            ],
            [
                'id'    => 51,
                'title' => 'test_delete',
            ],
            [
                'id'    => 52,
                'title' => 'test_access',
            ],
            [
                'id'    => 53,
                'title' => 'question_create',
            ],
            [
                'id'    => 54,
                'title' => 'question_edit',
            ],
            [
                'id'    => 55,
                'title' => 'question_show',
            ],
            [
                'id'    => 56,
                'title' => 'question_delete',
            ],
            [
                'id'    => 57,
                'title' => 'question_access',
            ],
            [
                'id'    => 58,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 59,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 60,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 61,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 62,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 63,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 64,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 65,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 66,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 67,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 68,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 69,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 70,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 71,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 72,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 73,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}