<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use App\Models\Text;
use Exception;

class EditTextController extends Controller
{
    /* display data for views */
    public function allText()
    {
        $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
        ->with('mytodo:username')
        ->orderBy('mytext.id', 'desc')
        ->get(['mytodo.*', 'mytext.*']);
        $image = Storage::url('laptop-user.jpg');
        return view('alltext', ['image' => $image, 'texts' => $texts]);
    }

    public function editText(Request $request)
    {
        $text = new Text();
        $text->textid = $request->query('textid');
        try {
            $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
            ->with('mytodo:username')
            ->where('mytext.id', $text->textid)
            ->get(['mytodo.*', 'mytext.*', 'mytodo.id as todoid']);
            $image = Storage::url('laptop-user.jpg');
            return view('edittext', ['image' => $image, 'text' => $text, 'texts' => $texts]);
        } catch (Exception $err1) {
            echo 'EditText EditText Failed: ' , $err1->getMessage();
        }
    }

    public function writeText(Request $request)
    {
        $text = new Text();
        $text->id = $request->input('textid');
        $text->werkzaamheden = $request->input('werkzaamheden');
        $text->last_action = $request->input('last_action');
        $text->mytodo_id = $request->input('mytodo_id');
        try {
            Text::where('id', $text->id)
            ->update(
                ['id' => $text->id,
                'werkzaamheden' => $text->werkzaamheden,
                'last_action' => $text->last_action,
                'mytodo_id' => $text->mytodo_id]
            );
            return redirect('/todotext');
        } catch (Exception $err2) {
            echo 'Text SaveText Failed: ' , $err2->getMessage();
        }
    }
}
