<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role' => 'super-admin']); // full permission
        Role::create(['role' => 'admin']); // full permission over a single application
        Role::create(['role' => 'user']); // just a normal user of a single application
    }
}
