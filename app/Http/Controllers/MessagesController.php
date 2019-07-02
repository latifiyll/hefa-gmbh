<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function index(){

      $messages = Message::orderBy('created_at', 'DESC')->get();

      return view('main.messages.index', compact('messages'));
    }

    public function show($id){

      $message = Message::where('id_message', $id)->first();

      return view('main.messages.show', compact('message'));
    }

    public function destroy($id)
    {
      $message = Message::where('id_message', $id)->delete();

      return redirect()->back();
    }
}
