<?php

use App\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Super',
            'surname' => 'Admin',
            'email' => 'SuperAdmin@gmail.com',
            'password' => Hash::make('superpassword'),
            'role' => User::TYPE_SUPER_ADMIN,
            'is_active' => User::TYPE_ACCESS_ACCEPTED,
        ]);
    }
}
