<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Factories\Sequence;

class QueryController extends Controller
{
    /* display data for views */
    public function query()
    {
        $todos = Todo::with('mytodo:todo')
        ->get('mytodo.*');
        $todos = Schema::getColumnListing('mytodo');
        $image = Storage::url('project-scope.png');
        return view('query', ['image' => $image, 'todos' => $todos]);
    }
    
    public function makeQuery(Request $request)
    {
        $todo = new Todo();
        $todo->query = $request->input('query');
        $todo->sorteer = $request->input('sorteer');
        try {
            $todos = Todo::with('mytodo:todo')
            ->orderBy($todo->query, $todo->sorteer)
            ->get('mytodo.*');
            $image = Storage::url('computer-woman.jpg');
            return view('getall', ['image' => $image,'todos' => $todos]);
        } catch (Exception $err1) {
            echo 'Query makeQuery Failed: ' . $err1->getMessage();
        }
    }

    public function fetch()
    {
        $todos = Todo::with('mytodo:todo')
        ->get('mytodo.*');
        $todos = Schema::getColumnListing('mytodo');
        $image = Storage::url('project-list.png');
        return view('fetch', ['image' => $image, 'todos' => $todos]);
    }
    
    public function getFetch(Request $request)
    {
        $todo = new Todo();
        $todo->query = $request->input('query');
        $todo->sorteer = $request->input('sorteer');
        $todo->row = $request->input('row');
        try {
            $todos = Todo::with('mytodo:todo')
            ->where($todo->query, $todo->row)
            ->get('mytodo.*');
            $image = Storage::url('computer-woman.jpg');
            return view('getall', ['image' => $image,'todos' => $todos]);
        } catch (Exception $err2) {
            echo 'Query getFetch Failed: ' . $err2->getMessage();
        }
    }

    public function like()
    {
        $todos = Todo::with('mytodo:todo')
        ->get('mytodo.*');
        $todos = Schema::getColumnListing('mytodo');
        $image = Storage::url('project-magnify.png');
        return view('like', ['image' => $image, 'todos' => $todos]);
    }

    public function getLike(Request $request)
    {
        $todo = new Todo();
        $todo->query = $request->input('query');
        $todo->sorteer = $request->input('sorteer');
        $todo->row = $request->input('row');
        try {
            $todos = Todo::with('mytodo:todo')
            ->where($todo->query, 'LIKE' , '%' . $todo->row . '%')
            ->get('mytodo.*');
            $image = Storage::url('computer-woman.jpg');
            return view('getall', ['image' => $image,'todos' => $todos]);
        } catch (Exception $err3) {
            echo 'Query getLike Failed: ' . $err3->getMessage();
        }
    }
}
