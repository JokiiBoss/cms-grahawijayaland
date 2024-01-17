<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@grahawijaya.com',
            'password' => bcrypt('Admin@123qw'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
