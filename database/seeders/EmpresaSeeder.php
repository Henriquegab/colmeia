<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::create([
            'nome' => 'COOPEMAPI',
            'cnpj' => '25.246.765/0001-37'
        ]);
        Empresa::create([
            'nome' => 'Empresa 2',
            'cnpj' => '25.246.765/0001-38'
        ]);
        Empresa::create([
            'nome' => 'Empresa 3',
            'cnpj' => '25.246.765/0001-39'
        ]);
    }
}
