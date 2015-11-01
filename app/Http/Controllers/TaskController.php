<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function showForm () {
        return view('task.make');
    }

    public function make (Request $request) {
        if (!$request->has('title') ||
            !$request->has('description') ||
            !$request->has('noOfPeople') ||
            !$request->has('noOfDays') ||
            !$request->has('budget') ||
            !$request->has('start_date') ||
            !$request->has('end_date')
        ) {
            return view('error')->with('error', 'Please provide all the fields.');
        }

        $task = new \App\Task;
        $input = $request->all();
        $task->employer_id = \Auth::id();
        $task->title = $input['title'];
        $task->description = $input['description'];
        $task->noOfPeople = $input['noOfPeople'];
        $task->noOfDays = $input['noOfDays'];
        $task->budget = $input['budget'];
        $task->start_date = $input['start_date'];
        $task->end_date = $input['end_date'];
        $task->preferred_gender = $input['preferred_gender'];
        $task->workFromHome = $input['workFromHome'];

        if (isset($input['min_age'])) {
            $task->min_age = $input['min_age'];
        }
        if (isset($input['max_age'])) {
            $task->max_age = $input['max_age'];
        }

        $task->save();

        // return response()->json(['success' => $task->id]);
        return redirect('/tasks');

    }

    public function show ($id) {
        $task = \App\Task::where('id', '=', $id)->get()->first();
        return view('task.index')->with('task', $task);
    }

    public function dashboard () {
        $tasks = \App\Task::where('employer_id', '=', \Auth::user()->id)->get();
        return view('task.your')->with('tasks', $tasks);
    }
}
