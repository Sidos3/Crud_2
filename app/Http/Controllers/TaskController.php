<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::get();
        return view('TaskManager.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TaskManager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $task = new Task();
        // $task->title = $request->title;
        // $task->description = $request->description;
        // $task->status = $request->status;
        // $task->due_date = $request->due_date;
        // $task->save();
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'due_date' => $request->due_date
        ]);
        return response('l\'information has been saved in database');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        Task::findorFail($id)->delete();
        return response('information delete');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::findorFail($id);
        return view('TaskManager.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task = Task::findorFail($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();
        return response('l\'inforation has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Task::findorFail($id)->delete();
        return response('information delete');
    }
}
