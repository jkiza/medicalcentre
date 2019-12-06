<?php
# @Author: izzy
# @Date:   2019-11-22T10:47:09+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T10:11:59+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Izabela';
        $admin->email = 'admin@medicalcentre.ie';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Izzy';
        $user->email = 'izzy@medicalcentre.ie';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
