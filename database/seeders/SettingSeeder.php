<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'project_id' => 1,
            'description' => 'Default description for settings',
            'no_whatsapp' => '0813 6369 6103',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
