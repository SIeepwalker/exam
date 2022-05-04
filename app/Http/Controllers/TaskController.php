<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => Task::all()
        ]);
    }

    public function single($id)
    {
        return view('task', [
            'task' => Task::findOrFail($id)
        ]);
    }
}
