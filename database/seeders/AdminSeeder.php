<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'role' => 'admin',
            'name' => 'Shop Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin@123'),
        ];
        DB::table('users')->insert($admin);
    }
}
