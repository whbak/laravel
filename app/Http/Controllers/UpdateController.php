<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use Exception;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UpdateController extends Controller
{
    /* display data for views */
    public function all()
    {
        $todos = Todo::with('mytodo:todo')
        ->get('mytodo.*');
        $image = Storage::url('gent-computer-user.png');
        return view('all', ['image' => $image, 'eerst' => '', 'todos' => $todos]);
    }

    public function edit(Request $request)
    {
        /* voorkomen http 419 error in view: @csrf <input> */
        $todo = new Todo();
        $todo->id = $request->query('id');
        $image = Storage::url('gent-computer-user.png');
        try {
            $todos = Todo::with('mytodo:username')
            ->where('id', $todo->id)
            ->get('mytodo.*');
            return view('edit', ['image' => $image, 'todo' => $todo, 'todos' => $todos]);
        } catch (Exception $err1) {
            echo 'Update Edit Failed: ' . $err1->getMessage();
        }
    }

    public function update(Request $request)
    {
        $todo = new Todo();
        $todo->id = $request->input('id');
        $todo->sequence = $request->input('sequence');
        $todo->todo = $request->input('todo');
        $todo->begin = $request->input('begin');
        $todo->finish = $request->input('finish');
        $todo->status = $request->input('status');
        if ($request->input('begin') > $request->input('finish')) {
            $todos = Todo::with('mytodo:todo')
            ->get('mytodo.*');
            $image = Storage::url('gent-computer-user.png');
            return view('all', ['image' => $image, 'eerst' => 'LET OP: datum begin voor finish! Op project wijzigen. ', 'todos' => $todos]);
        } else {
            try {
                Todo::where('id', $todo->id)
                ->update(
                    ['id' => $todo->id,
                    'sequence' => $todo->sequence,
                    'todo' => $todo->todo,
                    'begin' => $todo->begin,
                    'finish' => $todo->finish,
                    'status' => $todo->status]
                );        
                return redirect('/getall');
            } catch (Exception $err2) {
                echo 'Update Update Failed: ' . $err2->getMessage();
            }
        }
    }
}
