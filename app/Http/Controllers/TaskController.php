<?php


namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    // función guardar tarea
    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
        ]);

        $attributes['isDone'] = false; // Establecer el valor de isDone

        Task::create($attributes);

        return redirect('/');
    }

    public function update(Request $request, Task $task) {
        $attributes = request()->validate([
            'title' => 'required',
            'isDone' => 'boolean' // Asegúrate de que el campo isDone sea booleano
        ]);

        // Actualiza el campo isDone basado en si el checkbox está marcado
        $attributes['isDone'] = $request->has('isDone') ? true : false;

        $task->update($attributes);

        return response()->json(['message' => 'Tarea actualizada con éxito', 'task' => $task], 200);
    }

    public function destroy(Task $task) {

        $task->delete();

        return redirect('/');
    }

}


