<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->where('id', 1)->update([
            'role' => 'admin',
        ]);

        DB::table('users')->where('id', 2)->update([
            'role' => 'editor',
        ]);

        DB::table('users')->where('id', 3)->update([
            'role' => 'user',
        ]);
    }
}