<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolists = Todolist::where('user_id', auth()->id())->get();
        return view('home', compact('todolists'));
    }

  
    public function store(Request $request)
    {
        
        //dd($data);
        Todolist::create(
            [
                'content' => $request->content,
                'user_id' => auth()->id()
            ]
        );
        return redirect('/home');
    }

  
    public function destory(Todolist $todolist)
    {
        $todolist->delete();
        return redirect()->back();
    }

    public function update(Todolist $todolist)
    {
        $todolist->update([
            'completed' => true
        ]);
        return redirect('/home');
    }
}
