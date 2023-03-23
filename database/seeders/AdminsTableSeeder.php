<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
          ['id'=>1,'user_name'=>'Super Admin','first_name'=>'nuth','last_name'=>'van','type'=>'superadmin'
             ,'seller_id'=>0 ,'phone_num'=>'012345678','email'=>'admin@admin.com',
              'password'=>'$2a$12$MgwD7qRKdc1Z84NmPqN0MeIgi49SWG5LQYFcLwWAd1Vu3q1TdklFq','image'=>'','status'=>1
          ],
        ];
        Admin::insert($adminRecords);
    }
}
