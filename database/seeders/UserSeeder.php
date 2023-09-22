<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Admin',
            'mobile' => '0978807524',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => '$2y$10$o/lJXshPZCQeIYmqgOk1Zepln4mUHu9ltlPcZHxUruBUaoloL/fOK',
            'is_active' => 1,
            'private_image' => 'users/admin.jpg',
        ]);
    }
}