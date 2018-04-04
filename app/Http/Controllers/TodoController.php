<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    //
    public function index()
    {
        $todos = Todo::all();
        return view('home')->with('todos', $todos);
    }

    public function createtodo(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()->back();
        
    }
}
