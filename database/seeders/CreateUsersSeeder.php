<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name'              => 'Test Project',
            'email'             => 'admin@admin.com',
            'is_admin'          => 1,
            'password'          => Hash::make('password'),
        ]);
    }
}
