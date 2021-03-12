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
        \DB::table('simulation')->insert([
            'id' => 1,
            'inject_score' => 100,
            'created_origin' => '127.0.0.1',
            'uptime_score' => '{}',
            'sim_start' => 'Fri Mar 12 03:11:08 2021 UTC',
            'sim_end' => 'Fri Mar 12 03:11:08 2021 UTC',
         


            // $table->integer('score');
            // $table->string('created_origin');
            // $table->integer('inject_score');
            // $table->json('uptime_score');
            // $table->datetime('sim_start');
            // $table->datetime('sim_end');
        ]);
    
    }
}
