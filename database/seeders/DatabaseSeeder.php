<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MonitorTableSeeder::class);
        $this->call(InjectTableSeeder::class);
        $this->call(SimulationTableSeeder::class);
        $this->call(UploadTableSeeder::class);


    }
}
