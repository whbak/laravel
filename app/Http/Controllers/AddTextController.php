<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use App\Models\Text;
use Exception;

class AddTextController extends Controller
{
    /* display data for views */
    public function addText()
    {
        $texts = Text::rightJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
        ->with('mytodo:username')
        ->orderBy('mytodo.id', 'desc')
        ->get(['mytodo.*', 'mytext.*', 'mytodo.id as todoid']);
        $image = Storage::url('laptop-user.jpg');
        return view('addtext', ['image' => $image, 'texts' => $texts]);
    }

    public function saveText(Request $request)
    {
        try {
            $text = new Text();
            $text->werkzaamheden = $request->input('werk');
            $text->last_action = $request->input('action');
            $text->mytodo_id = $request->input('todoid');
            $text->save();
            return redirect('/text');
        } catch (Exception $err1) {
            echo 'Text SaveText Failed: ' , $err1->getMessage();
        }
    }

    public function text()
    {
        $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
        ->with('mytodo:username')
        ->orderBy('mytext.mytodo_id', 'desc')
        ->get(['mytodo.*', 'mytext.*']);
        $image = Storage::url('male-computer-user.png');
        return view('text', ['image' => $image, 'texts' => $texts]);
    }
}
