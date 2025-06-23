<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Ryan Yulianto',
                'email' => 'yuliantoryan64@gmail.com',
                'password' => '12345678',
                'phone_number' => '082230736205',
                'role' => RoleEnum::ADMIN->value,
            ]
        ];

        foreach($datas as $item){
            $user  = User::create([
                'name' => $item['name'],
                'email' => $item['email'],
                'password' => $item['password'],
                'phone_number' => $item['phone_number'],
            ]);
            $user->assignRole($item['role']);
        }
    }
}
