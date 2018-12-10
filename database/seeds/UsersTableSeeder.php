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
        $scrum_master = User::create([
            'dni' => '77093962',
            'name' => 'Benjamin',
            'last_name' => 'Flores Copa',
            'status' => 1,
            'email' => 'christianbfc97@gmail.com',
            'password' => bcrypt('christian1997'),
        ]);

        $developer = User::create([
            'dni' => '70002064',
            'name' => 'Manolo',
            'last_name' => 'Laura Jaramillo',
            'status' => 1,
            'email' => 'mjtemdark28@gmail.com',
            'password' => bcrypt('nl12400'),
        ]);

        $admin = User::create([
            'dni' => '00000000',
            'name' => 'Admin',
            'last_name' => 'Jhon Doe',
            'status' => 1,
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
        ]);

        $admin->assignRole('Admin');
        $scrum_master->assignRole('Scrum Master');
        $developer->assignRole('Developer');
    }
}
