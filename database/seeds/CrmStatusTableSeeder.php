<?php

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2020-09-15 03:16:36',
                'updated_at' => '2020-09-15 03:16:36',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2020-09-15 03:16:36',
                'updated_at' => '2020-09-15 03:16:36',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2020-09-15 03:16:36',
                'updated_at' => '2020-09-15 03:16:36',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}