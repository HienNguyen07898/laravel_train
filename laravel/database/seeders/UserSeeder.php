<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('123456'),
            'name' => 'hien',
            'email' => 'hien-nguyen@dimage.co.jb',
            'avatar' => 'avatar.jpg',
            'role' => 1,
        ]);
    }
}
