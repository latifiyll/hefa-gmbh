<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineOffer;
use App\MessageOnoffer;
use App\User;
use PDF;

class OnlineOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $onlineoffers = OnlineOffer::orderBy('created_at', 'DESC')->get();
        return view('main.onlineoffers.index', compact('onlineoffers', 'carbon'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $onoffers= OnlineOffer::where('id_offer', $id)->with('message_onoffers')->first();

        return view('main.onlineoffers.show', compact('onoffers'));


    }

    public function downloadPDF($id){

      $onoffers= OnlineOffer::where('id_offer', $id)->first();
      $pdf = PDF::loadView('main.pdf.invoice', $onoffers);
      return  $pdf->download($onoffers->client_fullname.'.pdf', compact('onoffers'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $onoffers= OnlineOffer::where('id_offer', $id)->delete();

      return redirect()->back();
    }


}
