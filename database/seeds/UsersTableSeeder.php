<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'role' => 'admin',
            'password' => Hash::make('secret123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
