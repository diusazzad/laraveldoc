<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::connection('testd')->table('roles')->insert([
            'role_name' => 'Admin',
            'role_slug' => 'admin',
        ]);

        DB::connection('testd')->table('roles')->insert([
            'role_name' => 'User',
            'role_slug' => 'user',
        ]);

        DB::connection('testd')->table('roles')->insert([
            'role_name' => 'Manager',
            'role_slug' => 'manager',
        ]);
    }
}
