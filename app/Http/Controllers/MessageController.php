<?php

namespace App\Http\Controllers;

use App\MessageOnoffer;
use Illuminate\Http\Request;
use App\OnlineOffer;
use App\User;
use Auth;
use Mail;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {



      return redirect("onlineoffers/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MessageOnoffer  $message
     * @return \Illuminate\Http\Response
     */
    public function show(MessageOnoffer $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(MessageOnoffer $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
    public function sendMessage(Request $request, OnlineOffer $onoffers, $id){

      $data = array(
        'client_fullname'=> $request->client_fullname,
        'email'=> $request->email,
        'subject'=>$request->subject,
        'bodyMessage'=>$request->text

      );

      Mail::send('main.onlineoffers.emails', $data, function($message) use($data){
        $message->from('latifiyll@gmail.com');
        $message->to($data['email']);
        $message->subject($data['subject']);

      });
      $messages=MessageOnoffer::create(
        [
          "text"=>$request->text,
          "id_offer"=> $id,
          "id_user" =>Auth::user()->id
        ]
      );
      return redirect("onlineoffers/$id");
    }
}
