<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'       => 'Sjors',
            'email'      => 'sjorskamphuis99@gmail.com',
            'password'   => Hash::make('Welkom2016!'),
            'created_at' => Carbon::now()
        ]);

        User::create([
            'name'       => 'Tom',
            'email'      => 'tom.ajax@gmail.com',
            'password'   => Hash::make('Welkom2016!'),
            'created_at' => Carbon::now()
        ]);
    }
}
