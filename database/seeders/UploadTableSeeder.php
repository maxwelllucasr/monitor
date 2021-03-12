<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UploadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('upload')->insert([
            'id' => 1,
            'filename' => 'aeiou.docx',
            'simulation_id' => 1,
            'inject_id' => 1,
        ]);
    
    }
}
