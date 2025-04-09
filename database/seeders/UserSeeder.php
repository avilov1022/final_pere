<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name'=> 'admin',
                    'middlename'=> 'admin',
                    'lastname'=> 'admin',
                    'school' => '32',
                    'class' => '9Б',
                    'password'=> Hash::make('administrator'),
                    'email'=> 'admin@mail.com',
                ],
            ]
        );
    }
}
