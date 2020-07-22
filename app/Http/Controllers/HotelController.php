<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use App\hotel;
use Illuminate\Http\Request;


class HotelController extends Controller
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

    public function form(Request $req)
    {

        $hotel=  new hotel;
        $hotel->uemail= Auth::user()->email;
        $hotel->place=$req->input('place');
        $hotel->checkin=$req->input('checkin');
        $hotel->checkout=$req->input('checkout');
        $hotel->adult=$req->input('adult');
        $hotel->child=$req->input('child');
        $hotel->room=$req->input('room');

        $hotel->save();

        return redirect('list');

    }


    function list()
    {
        $email=Auth::user()->email;
        // $data= upload :: all();
        $data=hotel:: where("uemail","$email")->get();
        return view('list',['data'=>$data]);
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
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(hotel $hotel)
    {
        //
    }
}
