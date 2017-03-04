<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('todo.home',compact('todos'));
    }


    public function create()
    {
        return view('todo.create');
    }


    public function store(Request $request)
    {
        $todo = new Todo;
        $this->validate($request,[

            'body'=>'required',                 //table di PMAdmin = todos
            'title'=>'required|unique:todos',
        ]);
        //model = table (value)PMAdmin
        $todo->body = $request->body;
        $todo->title = $request->title;
        $todo->save();
        return redirect('/todo');
    }


    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todo.show',compact('todo'));
    }


    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todo.edit', compact('todo'));
    }


    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $this->validate($request,[

            'body'=>'required',                 //table di PMAdmin = todos
            'title'=>'required|unique:todos',
        ]);
        //model = table (value)PMAdmin
        $todo->body = $request->body;
        $todo->title = $request->title;
        $todo->save();
        session()->flash('message','Updated Succesfully');  
        return redirect('/todo');
    }


    public function destroy($id)
    {
        $todo =Todo::find($id);
        $todo->delete();
        session()->flash('message','Delete Succesfully');          
        return redirect('/todo');
    }
}
