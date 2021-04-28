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
        $this->call(CustomizedCoursTableSeeder::class);
        $this->call(CustomizedFailedJobsTableSeeder::class);
        $this->call(CustomizedMenusTableSeeder::class);
        $this->call(CustomizedPermissionsTableSeeder::class);
        $this->call(CustomizedRolesTableSeeder::class);
        $this->call(CustomizedTranslationsTableSeeder::class);
        $this->call(CustomizedUserRolesTableSeeder::class);
        $this->call(CustomizedUsersTableSeeder::class);
        $this->call(CoursTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
