<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('monitor')->insert([
            0 => [
                'id' => 1,
                'name' => 'name',
                'content' => 'content',
            ],

        ]);
    }
}
