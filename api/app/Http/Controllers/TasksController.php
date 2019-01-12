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

    public function show($id)
    {
        return Task::findOrFail($id);
    }

}
