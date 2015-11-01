<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function showForm () {
        return view('search.index');
    }

    public function show (Request $request) {
        if (!$request->has('query')) {
            return redirect('search');
        }
        $input = $request->all();
        // Search jobs in city
        $task = \App\Employer::where('location', 'like', '%' . $input['query'] . '%')->get();
        $tasks = [];
        foreach ($task as $t) {
            $tasksOfEmp = \App\Task::where('employer_id', '=', $t->user_id)->where('available', '=', true)->get();
            foreach ($tasksOfEmp as $t2) {
                array_push($tasks, $t2);
            }
        }
        return view('search.result')->with('results', $tasks);
        // return $tasks;
    }
}
