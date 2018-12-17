<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' =>'Scrum Admin',
        ]);
        Project::create([
            'name' => 'Facebook',
        ]);
        Project::create([
            'name' => 'Google',
        ]);
        Project::create([
            'name' =>'Snapchat',
        ]);
    }
}
