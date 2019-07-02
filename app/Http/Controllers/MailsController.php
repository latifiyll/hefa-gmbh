<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Category;
use App\Type;
Use App\OnlineOffer;
class MailsController extends Controller
{
    public function index(Request $request,OnlineOffer $onoffer )
    {

        $data = array(
          'fullname'=>$request->fullname,
          'email'=> $request->email,
          'address'=> $request->address,
          'category_id'=> $request->category_id,
          'type_id'=> $request->type_id,
          'bodyMessage'=>$request->details
        );

        Mail::send('contact.emails', $data, function($message) use($data){
          $message->from($data['email']);
          $message->to('latifiyll@gmail.com');

        });
        $onoffer->create(
          [
            "fullname"=>$request->fullname,
            "email"=>$request->email,
            "address"=>$request->address,
            "category_id"=>$request->category_id,
            "type_id"=>$request->type_id,
            "details"=>$request->details

          ]
          );


        return redirect('contact');
      }






    }
