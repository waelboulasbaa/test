<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomizedCoursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cours')->delete();
        
        
        
    }
}