<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;

class TodoController extends Controller
{
    /* display data for views */
    public function index()
    {
        $image = Storage::url('todo-house.jpg');
        return view('index', ['image' => $image]);
    }

    public function todo()
    {
        $todos = Todo::with('mytodo:username')->get(['username', 'todo']);
        $image = Storage::url('happy-computer-user.png');
        return view('todo', ['image' => $image, 'todos' => $todos]);
    }

    public function getall()
    {
        $todos = Todo::with('mytodo:todo')->get('mytodo.*');
        $image = Storage::url('computer-woman.jpg');
        return view('getall', ['image' => $image, 'todos' => $todos]);
    }

    public function logout()
    {
        $image = Storage::url('out-of-house.png');
        return view('logout', ['image' => $image]);
    }
}
