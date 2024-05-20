<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use App\Models\User;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolists = Todolist::all();
        $users = User::all();
        return view('dashboard', compact('todolists','users'));
        // $todolists = ToDolist::all();
        // return response()->json($todolists);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'By' => 'required',
            'TaskName' => 'required',
            'Deadline' => 'required',
            'To' => 'required'
        ]);
        ToDolist::create($data);
        return back();
    }

    public function show(ToDoList $toDoList)
    {
        $toDoList -> delete();
        return back();
    }



 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDoList $toDoList)
    {
        //
    }
}
