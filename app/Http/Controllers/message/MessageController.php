<?php

namespace App\Http\Controllers\message;

use App\Models\Message;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index() : View {
        $messages = Message::all();
        return view('messages.index', [
            'messages' => $messages
        ]);
    }
}
