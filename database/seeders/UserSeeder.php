<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Administrador 1",
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('senha123admin'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Administrador 2",
            'email' => 'teste@teste.com',
            'email_verified_at' => now(),
            'password' => bcrypt('senha123admin'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => "Administrador 3",
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('senha123admin'),
            'remember_token' => Str::random(10),
        ]);
    }
}
