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

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return view('delete', [
            'task' => $task
        ]);
    }
}
