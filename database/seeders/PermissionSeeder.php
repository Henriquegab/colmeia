<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /**
         * Admin
         */
        $admin = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);

        /**
         * aluno - Aluno
         */
        $usuario = Role::create([
            'name' => 'Usuario',
            'guard_name' => 'web'
        ]);
        /**
         * Psicologo - Psicologo
         */


        /**
         * Permissões para Perfis
         */
        DB::table('permissions')->insert([
            'name' => 'Cadastrar Empresa',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Listar Empresa',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Editar Empresa',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Deletar Empresa',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Cadastrar Mel',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Gerenciar Mel',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Meus Lotes',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Cadastrar Novo Lote',
            'guard_name' => 'web',
        ]);
        DB::table('permissions')->insert([
            'name' => 'Gerenciar Usuários',
            'guard_name' => 'web',
        ]);




        // $usuario->givePermissionTo('Cadastrar Empresa');




        // admin
        $admin->givePermissionTo('Cadastrar Empresa');
        $admin->givePermissionTo('Listar Empresa');
        $admin->givePermissionTo('Editar Empresa');
        $admin->givePermissionTo('Deletar Empresa');
        $admin->givePermissionTo('Gerenciar Usuários');
        // $admin->givePermissionTo('Meus Lotes');
        // $admin->givePermissionTo('Cadastrar Novo Lote');

        // usuario
        $usuario->givePermissionTo('Meus Lotes');
        $usuario->givePermissionTo('Cadastrar Novo Lote');


    }
}
