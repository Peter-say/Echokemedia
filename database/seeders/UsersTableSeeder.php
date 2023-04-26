<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'echokemediaadmin@gmail.com',
                'username' => 'Sudo',
                'role' => 'Super-Admin',
                'email_verified_at' => now(),
                'password' => bcrypt('#123456@echoke@'),
                'remember_token' => bcrypt(Str::random(10)),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
