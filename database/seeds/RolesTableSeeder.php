<?php
# @Author: izzy
# @Date:   2019-11-22T10:47:25+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-11-22T10:51:24+00:00




use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An administrator user';
        $role_admin->save();

        $role_admin = new Role();
        $role_admin->name = 'user';
        $role_admin->description = 'An ordinary user';
        $role_admin->save();

    }
}
