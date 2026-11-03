<?php

namespace App\Http\Controllers;

use App\Models\Task;

class PageController extends Controller
{
    public function home()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('home', compact('tasks'));
    }

    public function about()
    {
        return view('about');
    }
}