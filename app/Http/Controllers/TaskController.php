<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        $tasks = Task::latest()->paginate(10);
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'body' => 'nullable',
            'status' => 'required'
        ]);

        $data['user_id'] = Auth::id();

        Task::create($data);

        return redirect()->route('tasks.index')->with('success','Task creato con successo');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        $this->authorizeTask($task);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $this->authorizeTask($task);

        $data = $request->validate([
            'title' => 'required|max:255',
            'body' => 'nullable',
            'status' => 'required'
        ]);

        $task->update($data);

        return redirect()->route('tasks.index')->with('success','Task aggiornato con successo');
    }

    public function destroy(Task $task)
    {
        $this->authorizeTask($task);
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Task eliminato con successo');
    }

    private function authorizeTask(Task $task)
    {
        abort_if($task->user_id !== Auth::id(), 403);
    }
}