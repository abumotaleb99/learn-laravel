<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $allTodo = Todo::all();

        return view("home", ["allTodo" => $allTodo]);
    }

    public function saveTodo(Request $request) {
        $todo = new Todo();
        $todo->task = $request->task;
        $todo->status = $request->status;
        $todo->save();

        return redirect('/');
    }

    public function editTodo($id) {
        $allTodo = Todo::all();
        $todo = Todo::find($id);
    
        return view("edit-todo", ["allTodo" => $allTodo, "todo" => $todo]);
    }

    public function updateTodo(Request $request) {
        $todo = Todo::find($request->todo_id);
        $todo->task = $request->task;
        $todo->status = $request->status;
        $todo->save();

        return redirect('/');
    }
    

}
