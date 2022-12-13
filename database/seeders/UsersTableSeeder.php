<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Wilson Admin',
                'email'              => env('SUPER_ADMIN_EMAIL'),
                'password'           => bcrypt(env('SUPER_ADMIN_PASSWORD')),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2022-12-13 11:26:28',
                'verification_token' => '',
                'phone_number'       => '',
                'organization'       => '',
            ],
            [
                'id'                 => 2,
                'name'               => 'Direct Selling Admin',
                'email'              => env('ADMIN_EMAIL'),
                'password'           => bcrypt(env('ADMIN_PASSWORD')),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2022-12-13 11:26:28',
                'verification_token' => '',
                'phone_number'       => '',
                'organization'       => '',
            ],
        ];

        User::insert($users);
    }
}
