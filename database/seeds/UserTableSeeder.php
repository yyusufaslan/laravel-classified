<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name','admin')->first();
        $role_manager = Role::where('name','user')->first();

        $employee = new User();
        $employee->name ='Yusuf';
        $employee->email = 'admin@admin.com';
        $employee->password = bcrypt('admin');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $manager = new User();
        $manager->name = 'Editor';
        $manager->email = 'editor1@editor1.com';
        $manager->password = bcrypt('editor1');
        $manager->save();
        $manager->roles()->attach($role_manager);
    }
}
