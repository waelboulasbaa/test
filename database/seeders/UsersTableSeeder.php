<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DMMBCp.oBPSwkVVW6HDsTuNWA.Wgib1RdXg1.adHYA3f.EOx33.d.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-04-28 11:55:31',
                'updated_at' => '2021-04-28 11:55:32',
            ),
        ));
        
        
    }
}