<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show()
    {
        return Task::all();
    }

    public function showOne($id)
    {
        return Task::findOrFail($id);
    }

    public function store()
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }

}
