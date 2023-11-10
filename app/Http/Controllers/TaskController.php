<?php


namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index() {
        $tasks = Task::all();
        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    public function store() {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Task::create($attributes);

        return redirect('/');
    }

    public function delete(){

    }


}


