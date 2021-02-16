<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class MonitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Schema::dropIfExists('monitor');
        \DB::table('monitor')->insert([
            'id' => 1,
            'url' => 'google.com',
         
        ]);
        \DB::table('monitor')->insert([
            'id' => 2,
            'url' => 'amazon.com',
         
        ]);
        \DB::table('monitor')->insert([
            'id' => 3,
            'url' => 'facebook.com',
         
        ]);
        \DB::table('monitor')->insert([
            'id' => 4,
            'url' => 'apple.com',
         
        ]);
        \DB::table('monitor')->insert([
            'id' => 5,
            'url' => 'nasdaq.com',
         
        ]);
    
    }
}
