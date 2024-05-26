<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('task.index');
    }
    public function create(Request $request){
        $request -> validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        Task::newtask($request);
        return redirect('/task.index')->with('message','Task Info Create Successfully.');
    }
    public function manage(){
        return view('task.manage',['todos'=>Task::all()]);
    }
    public function edit($id){
        return view('task.edit', ['todo' => Task::find($id)]);
    }
    public function update(Request $request, $id){
        Task::updatetask($request,$id);
        return redirect('task.manage')->with('message','Task Info Updated Successfully.');
    }
    public function delete($id){
        Task::deleteuser($id);
        return redirect('task.manage')->with('message','Task Deleted Successfully.');
    }
}
