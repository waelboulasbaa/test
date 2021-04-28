<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomizedTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translations')->delete();
        
        
        
    }
}