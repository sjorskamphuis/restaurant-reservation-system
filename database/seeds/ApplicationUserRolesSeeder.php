<?php

use App\ApplicationUserRole;
use Illuminate\Database\Seeder;

class ApplicationUserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicationUserRole::create([
            'application_id' => '1',
            'user_id' => '1',
            'role_id' => '1'
        ]);

        ApplicationUserRole::create([
            'application_id' => '1',
            'user_id' => '2',
            'role_id' => '1'
        ]);
    }
}
