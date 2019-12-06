<?php
# @Author: izzy
# @Date:   2019-10-21T19:47:27+01:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T09:51:50+00:00




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
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
