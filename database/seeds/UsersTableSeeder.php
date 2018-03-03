<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'fvasquez';
        $admin->email = 'fvasquez@local.com';
        $admin->password = '123456';
        $admin->save();
//        $admin->assignRole($adminRole);
//        $admin->assignRole($writerRole);

        $writer = new User;
        $writer->name = 'svasquez';
        $writer->email = 'svasquez@local.com';
        $writer->password = '123456';
        $writer->save();
    }
}
