<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use App\Models\Text;
use Exception;

class DelTextController extends Controller
{
    /* display data for views */
    public function wipeText()
    {
        $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
        ->with('mytodo:id')
        ->get(['mytodo.*', 'mytext.*']);
        $image = Storage::url('laptop-user.jpg');
        return view('wipetext', ['image' => $image, 'eerst' => '', 'texts' => $texts]);
    }

    public function checkText(Request $request)
    {
        $text = new Text();
        $text->textid = $request->query('textid');
        $texts = Text::with('mytext.id')
        ->where('mytext.id', $text->textid)
        ->get('mytext.id');
        try {
            if (!isset($texts[0]['id'])) {
                $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
                ->with('mytodo:id')
                ->get(['mytodo.*', 'mytext.*']);
                $image = Storage::url('laptop-user.jpg');    
                return view('wipetext', ['image' => $image, 'eerst' => 'LET OP: text id moet in de tabel staan!', 'texts' => $texts]);
            }
        } catch (Exception $err1) {
            echo 'CheckText CheckText unset Failed: ' . $err1->getMessage();
        }
        try {
            $texts = Text::with('mytext.id')
            ->where('mytext.id', $text->textid)
            ->get('mytext.*');
            $image = Storage::url('happy-computer-user.jpg');
            return view('checktext', ['image' => $image, 'texts' => $texts]);
        } catch (Exception $err2) {
            echo 'CheckText CheckText set Failed: ' . $err2->getMessage();
        }
    }

    public function delText(Request $request)
    {
        $text = new Text();
        $text->id = $request->query('id');
        $text->check = $request->query('check');
        if ($text->check == 'delete') {
            try {
                $texts = Text::with('mytext:id')
                ->where('id', $text->id)
                ->where('mytodo_id', '>', 0)
                ->delete('mytext.*');
                $texts = Text::leftJoin('mytodo', 'mytodo.id', '=', 'mytext.mytodo_id')
                ->with('mytodo:id')
                ->orderBy('mytext.id', 'desc')
                ->get(['mytodo.*', 'mytext.*']);
                $image = Storage::url('laptop-user.jpg');
                return view('todotext', ['image' => $image, 'texts' => $texts]);
            } catch (Exception $err3) {
                echo 'DelText DelText Failed: ' . $err3->getMessage();
            }
        } else {
            return redirect('/todotext');
        }
    }
}
