<?php

use App\Application;
use Illuminate\Database\Seeder;

class ApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::create([
            'name' => 'Restaurant Malkenschoten',
            'uri' => 'https://www.restaurant-malkenschoten.nl'
        ]);
    }
}
