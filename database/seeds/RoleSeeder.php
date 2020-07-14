<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Role::class)->times(48)->create();
        $role = new Role();
        $role->name = 'Administrador';
        $role->save();
        $role = new Role();
        $role->name = 'Cliente';
        $role->save();
    }
}
