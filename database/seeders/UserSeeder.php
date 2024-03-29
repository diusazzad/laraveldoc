<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for($i=1;$i<=40;$i++){
        //     DB::table('users')->insert([
        //         'name' => 'User ' . $i,
        //         'email' => 'user' . $i . '@example.com',
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('password'),
        //         'remember_token' => Str::random(10),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }

        DB::connection('testd')->table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);

        DB::connection('testd')->table('users')->insert([
            'role_id' => '2',
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('pass@user'),
        ]);

        DB::connection('testd')->table('users')->insert([
            'role_id' => '3',
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('pass@manager'),
        ]);


    }
}
