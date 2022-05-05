<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => Task::all()
        ]);
    }

    public function order()
    {
        return view('index', [
            'tasks' => DB::table("tasks")->orderBy("title")->get()
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
