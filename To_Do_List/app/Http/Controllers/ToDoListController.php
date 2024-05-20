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
    public function index(Request $request)
    {
        $todolists = ToDoList::all();
        // $users = User::all();
        
        if ($request->expectsJson()) {
            return response()->json($todolists);
        }
        
        return view('dashboard', compact('todolists'));
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDolist $toDoList)
    {
        $toDoList -> delete();
        return back();
    }
    
}
