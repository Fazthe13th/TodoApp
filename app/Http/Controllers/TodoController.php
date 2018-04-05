<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public $todoObj;
    public function __construct() {
        $this->todoObj = new Todo;
    }
    public function index()
    {
        $todos = Todo::all();
        return view('home')->with('todos', $todos);
    }

    public function createtodo(Request $request)
    {
        
        $this->todoObj->todo = $request->todo;
        $this->todoObj->save();

        return redirect()->back();
        
    }

    public function delete($id)
    {
        
        $todo = $this->todoObj->find($id);
        $todo->delete();
        return redirect()->back();
        
    }
}
