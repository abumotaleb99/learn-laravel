<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        return view('home');
    }

    public function saveTodo(Request $request) {
        $todo = new Todo();
        $todo->task = $request->task;
        $todo->status = $request->status;
        $todo->save();

        return redirect('/');
    }
}
