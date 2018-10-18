<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function fetch($id)
    {
        $messages = Message::all();

        return view('chats', compact('messages', 'id'));
    }

    public function send(Request $request)
    {
        $data = $request->all();

        Message::create($data);

        broadcast(new MessageSent($data))->toOthers();
    }
}