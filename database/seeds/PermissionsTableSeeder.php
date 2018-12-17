<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' =>'Scrum Admin',
        ]);
        Permission::create([
            'name' => 'Facebook',
        ]);
        Permission::create([
            'name' => 'Google',
        ]);
        Permission::create([
            'name' =>'Snapchat',
        ]);
    }
}
