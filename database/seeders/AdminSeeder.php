<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'Super Admin',
            'email' => 'echokemediasuper_admin@gmail.com',
            'username' => 'Sudo',
            'password' => bcrypt('#123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),


        ]);

        User::create([
    
            'name' => 'User User',
            'email' => 'echokemediaadmin@gmail.com',
            'username' => 'Media Creator',
            'password' => bcrypt('#123456'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),


        ]);
    }
}
