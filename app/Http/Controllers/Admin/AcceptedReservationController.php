<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcceptedReservation;
use Illuminate\Http\Request;

class AcceptedReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.acceptedreservation.index');
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
     * @param  \App\Models\AcceptedReservation  $acceptedReservation
     * @return \Illuminate\Http\Response
     */
    public function show(AcceptedReservation $acceptedReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcceptedReservation  $acceptedReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(AcceptedReservation $acceptedReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcceptedReservation  $acceptedReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcceptedReservation $acceptedReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcceptedReservation  $acceptedReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcceptedReservation $acceptedReservation)
    {
        //
    }
}
