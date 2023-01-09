<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DeleteController extends Controller
{
    /* display data for views */
    public function assign()
    {
        $todos = Todo::with('mytodo:todo')
        ->where('status', 'closed')
        ->get('mytodo.*');
        $image = Storage::url('gent-computer-user.png');
        return view('assign', ['image' => $image,'todos' => $todos]);
    }
    
    public function delete(Request $request)
    {
        $todo = new Todo();
        $todo->id = $request->input('id');
        $todo->check = $request->input('check');
        if ($todo->check == 'delete') {
            try {
                $todos = Todo::with('mytodo:username')
                ->where('id', $todo->id)
                ->where('status', 'closed')
                ->delete('mytodo.*');
                $todos = Todo::with('mytodo:todo')->get('mytodo.*');
                $image = Storage::url('computer-woman.jpg');
                return view('getall', ['image' => $image, 'todo' => $todo, 'todos' => $todos]);
            } catch (Exception $err1) {
                echo 'Delete Choose Failed: ' . $err1->getMessage();
            }
        } else {
            return redirect('/getall');
        }
    }
}
