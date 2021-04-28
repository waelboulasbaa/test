<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomizedRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2021-04-28 11:54:23',
                'updated_at' => '2021-04-28 11:54:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2021-04-28 11:54:23',
                'updated_at' => '2021-04-28 11:54:23',
            ),
        ));
        
        
    }
}