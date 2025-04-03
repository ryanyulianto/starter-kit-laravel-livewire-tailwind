<?php

namespace Database\Seeders;

use App\Models\Spatie\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            'admin',
            'user',
        ];

        foreach ($datas as $data) {
            Role::create([
                'name' => $data,
                'guard_name' => 'web',
            ]);
        }
    }
}
