<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $entrenadorRole = Role::create(['name' => 'entrenador']);

        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);

        $adminUser->assignRole($adminRole);

        $entrenadores = [
            [
                'name' => 'alpine',
                'email' => 'alpine@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 1,
            ],
            [
                'name' => 'dark',
                'email' => 'dark@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 2,
            ],
            [
                'name' => 'lina',
                'email' => 'lina@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 3,
            ],
            [
                'name' => 'kratos',
                'email' => 'kratos@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 4,
            ],
            [
                'name' => 'kakumei',
                'email' => 'kakumei@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 5,
            ],
            [
                'name' => 'travis',
                'email' => 'travis@gmail.com',
                'password' => Hash::make('12345678'),
                'entrenador_id' => 6,
            ]
        ];

        foreach ($entrenadores as $entrenador) {
            $entrenadorUser = User::create($entrenador);
            $entrenadorUser->assignRole($entrenadorRole);
        }
    }
}
