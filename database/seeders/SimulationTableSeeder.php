<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SimulationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('simulations')->insert([
            'id' => 1,
            'inject_score' => 100,
            'created_origin' => '127.0.0.1',
            'uptime_score' => '{}',
            'sim_start' => '2021-03-12 22:24:06',
            'sim_end' => '2021-03-12 22:24:06',
         


            // $table->integer('score');
            // $table->string('created_origin');
            // $table->integer('inject_score');
            // $table->json('uptime_score');
            // $table->datetime('sim_start');
            // $table->datetime('sim_end');
        ]);
    
    }
}
