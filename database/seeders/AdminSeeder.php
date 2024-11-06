<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Lica-admin',
            'email' => 'lica@ppgmcs.com',
            'password' => bcrypt('12345678'),
            'empresa_id' => 1
        ]);

        $admin->assignRole('Admin');

        $usuario = User::create([
            'name' => 'Henrique',
            'email' => 'henriquepro8@gmail.com',
            'password' => bcrypt('12345678'),
            'empresa_id' => 1
        ]);

        $usuario->assignRole('Usuario');
    }
}
