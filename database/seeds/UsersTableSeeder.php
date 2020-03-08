<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Admin',
            'email'    => 'admin@local.com',
            'avatar'   => 'avatar.png',
            'gender'   => 'male',
            'active'   => 1,
            'role_id'  => 1,
            'college_id'  => 1,
            'stage_id'  => 1,
            'password' => Hash::make('12345678'),
        ]);
    }
}
