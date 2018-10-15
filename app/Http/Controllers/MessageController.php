<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;

        $data = array('user_id' => $user_id);

        return view('broadcast', compact('data'));
    }

    public function send(Request $request)
    {
        $from_id = Auth::user()->id;
//        $message = Message::create([
//            'from' => 1,
//            'to' => 2,
//            'message' => $request->input('message')
//        ]);
//        dd($message);
            $message = new Message;
            $message->setAttribute('from', $from_id);
            $message->setAttribute('to', 2);
            $message->setAttribute('message', 'demo message from user 1 to user 2');
            $message->save();

        broadcast(new MessageSent($message));
    }
}