<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){

        $todo = Todo::all();

        return view('todos.index')->with('todos', $todo);
    }

    public function show(Todo $todo){
       return view('todos.show')->with('todo', $todo);
    }

    public function create(){

        return view('todos.create');
    }

    public static function store(Request $request){

        $request->validate( [
            'name' => 'required|min:5| max:50',
            'description' => 'required|min:16| max:512',

        ]);

        $data = request()->all();
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description	 = $data['description'];
        $todo->completed = false;


        $todo->save();
        session()->flash('success', 'Task Created Successfully');

        return redirect('/todos');
    }

    public function edit(Todo $todo){
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo){
        $request->validate( [
            'name' => 'required|min:5| max:50',
            'description' => 'required|min:16| max:512',

        ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        session()->flash('success', 'Task Updated Successfully');
        $todo->save();

        return redirect('todos');
    }

    public function delete(Todo $todo){
        $todo->delete();
        session()->flash('success', 'Task Deleted Successfully');
        return redirect('/todos');
    }

    public function completed(Todo $todo){
        $todo->completed = true;
        $todo->save();

        return redirect('/todos');
    }

    public function notcompleted(Todo $todo){
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

}
