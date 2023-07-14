<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
    public function index(){
        $messages = message::orderBy('id', 'desc')->get();
        return view('index', ['messages' => $messages]);
    }

    public function save(Request $request){
        $data = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:120|email:rfc,dns',
            'message' => 'required|max:1000',
        ]);

        $newMessage = message::create($data);

        return redirect(route('message.index'));
    }
}
