<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('task_date')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }
}