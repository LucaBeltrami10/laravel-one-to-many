<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'project_name' => 'htmlcss-hello',
                'description' => 'introduzione HTML',
                'language_used' => 'HTML',
                'framework_used' => null,
                'status' => 1,
                'repository_url' => 'https://github.com/LucaBeltrami10/htmlcss-hello.git',
            ],
            [
                'project_name' => 'html-london-trip ',
                'description' => 'introduzione HTML',
                'language_used' => 'HTML',
                'framework_used' => null,
                'status' => 1,
                'repository_url' => 'https://github.com/LucaBeltrami10/html-london-trip.git',
            ],
            [
                'project_name' => 'html-css-booleaner',
                'description' => 'introduzione HTML',
                'language_used' => 'HTML, CSS',
                'framework_used' => null,
                'status' => 1,
                'repository_url' => 'https://github.com/LucaBeltrami10/html-css-booleaner.git',
            ]
        ];

        foreach ($projects as $value) {
            $newProject = new Project();

            $newProject->project_name = $value['project_name'];
            $newProject->description = $value['description'];
            $newProject->language_used = $value['language_used'];
            $newProject->framework_used = $value['framework_used'];
            $newProject->status = $value['status'];
            $newProject->repository_url = $value['repository_url'];
            $newProject->save();
        }
    }
}