<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class Tsa3Seeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'charles.martin',
            'full_name' => 'Charles Miguel Martin',
            'email' => 'charles.martin@example.com',
        ]);

        $tasks = [
            [
                'title' => 'Review yesterday’s completed activities',
                'status' => 'completed',
                'task_date' => today()->subDay(),
            ],
            [
                'title' => 'Prepare project requirements',
                'status' => 'completed',
                'task_date' => today()->subDay(),
            ],
            [
                'title' => 'Check Laravel database connection',
                'status' => 'completed',
                'task_date' => today(),
            ],
            [
                'title' => 'Create task migration and model',
                'status' => 'completed',
                'task_date' => today(),
            ],
            [
                'title' => 'Develop the Tasks for Today page',
                'status' => 'pending',
                'task_date' => today(),
            ],
            [
                'title' => 'Test all application routes',
                'status' => 'pending',
                'task_date' => today(),
            ],
            [
                'title' => 'Capture screenshots of the application',
                'status' => 'pending',
                'task_date' => today()->addDay(),
            ],
            [
                'title' => 'Upload the completed project to GitHub',
                'status' => 'pending',
                'task_date' => today()->addDay(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}