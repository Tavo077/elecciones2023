<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $admin = Role::create(['name'=>"Admin"]);
    $user = Role::create(['name'=>'User']);

    Permission::create(['name' => 'dashboard'])->syncRoles($admin);
    Permission::create(['name' => 'voto.index'])->syncRoles($admin, $user);

    Permission::create(['name' => 'usuarios.index'])->syncRoles($admin);
    Permission::create(['name' => 'usuarios.create'])->syncRoles($admin);
    Permission::create(['name' => 'usuarios.edit'])->syncRoles($admin);

    Permission::create(['name' => 'candidatos.index'])->syncRoles($admin);
    Permission::create(['name' => 'candidatos.create'])->syncRoles($admin);
    Permission::create(['name' => 'candidatos.edit'])->syncRoles($admin);

    Permission::create(['name' => 'partidos.index'])->syncRoles($admin);
    Permission::create(['name' => 'partidos.create'])->syncRoles($admin);
    Permission::create(['name' => 'partidos.edit'])->syncRoles($admin);
    }
}
