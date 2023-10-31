<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public $timestamps = false;
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tasks = new Tasks();
        
        $tasks->taskname = $request->__get('taskname');
        $tasks->priority = $request->__get('priority');
        $tasks->timestamp = $request->__get('timestamp');
        
        $tasks->save();
        
        return redirect('/');
    }
}
