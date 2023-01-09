<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use App\Models\Text;
use Exception;

class TextController extends Controller
{
    /* display data for views */
    public function todoText()
    {
        $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
        ->with('mytodo:id')
        ->orderBy('mytext.id', 'desc')
        ->get(['mytodo.*', 'mytext.*']);
        $image = Storage::url('laptop-user.jpg');
        return view('todotext', ['image' => $image, 'texts' => $texts]);
    }

    public function pickText()
    {
        $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
        ->with('mytext:id')
        ->orderBy('mytext.id', 'desc')
        ->get(['mytodo.*', 'mytext.*']);
        $image = Storage::url('laptop-user.jpg');
        return view('picktext', ['image' => $image, 'texts' => $texts]);    
    }

    public function showText(Request $request)
    {
        $text = new Text();
        $text->textid = $request->query('textid');
        try {
            $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
            ->with('mytodo:id')
            ->where('mytext.id', $text->textid)
            ->get(['mytodo.*', 'mytext.*']);
            $image = Storage::url('happy-computer-user.jpg');
            return view('showtext', ['image' => $image, 'text' => $text, 'texts' => $texts]);
        } catch (Exception $err1) {
            echo 'ShowText ShowText Failed: ' , $err1->getMessage();
        }
    }
}
