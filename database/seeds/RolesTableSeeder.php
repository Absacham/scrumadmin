<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
           'name' => 'Admin'
        ]);
        Role::create([
            'name' => 'Scrum Master'
        ]);
        Role::create([
            'name' => 'Product Owner'
        ]);
        Role::create([
            'name' => 'Analyst'
        ]);
        Role::create([
            'name' => 'Developer'
        ]);
    }
}
