<?php
# @Author: izzy
# @Date:   2019-11-22T10:47:25+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T10:01:37+00:00




use Illuminate\Database\Seeder;
use App\Role;

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

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'An ordinary user';
        $role_user->save();

    }
}
