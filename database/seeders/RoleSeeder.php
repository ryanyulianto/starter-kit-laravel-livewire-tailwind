<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
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


        foreach (array_column(RoleEnum::cases(), 'value') as $data) {
            Role::create([
                'name' => $data,
            ]);
        }
    }
}
