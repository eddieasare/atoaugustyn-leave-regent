<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Augustine Chinful',
            'email' => 'atoagustyn@pm.me',
            'password' => Hash::make('password'),
            'gender' => 'Male',
            'dob' => '1992-04-04',
            'mobile' => '0554455901',
            'department' => 'ICT',
            'role' => 'Admin',
        ]);
    }
}
