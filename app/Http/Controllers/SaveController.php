<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use Exception;
use Illuminate\Database\Eloquent\Factories\Sequence;

class SaveController extends Controller
{
    /* display data for views */
    public function store()
    {
        /* user uit login laravel auth 6 */
        $user = auth()->user();
        $username = $user['name'];
        $image = Storage::url('gent-computer-user.png');
        return view('store', ['image' => $image, 'eerst' => '', 'username' => $username]);
    }

    public function save(Request $request)
    {
        $user = auth()->user();
        $username = $user['name'];
        $image = Storage::url('gent-computer-user.png');
        try {
            if ($request->input('begin') > $request->input('finish')) {
                return view('store', ['image' => $image, 'eerst' => 'LET OP: datum begin voor finish!', 'username' => $username]);
            } else {
                $todo = new Todo();
                $todo->sequence = $request->input('sequence');
                $todo->username = $request->input('username');
                $todo->todo = $request->input('todo');
                $todo->begin = $request->input('begin');
                $todo->finish = $request->input('finish');
                $todo->status = $request->input('status');
                $todo->save();
                return redirect('/ready');
            }
        } catch (Exception $err1) {
            echo 'Save Save Failed: ' . $err1->getMessage();
        }
    }

    public function ready()
    {
        $todos = Todo::with('mytodo:username')
        ->orderBy('id', 'desc')
        ->where('status', 'new')
        ->get(['id', 'sequence', 'username', 'todo', 'status']);
        $image = Storage::url('computer-user.png');
        return view('ready', ['image' => $image, 'todos' => $todos]);
    }
}
