<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\UserEquipment;
use Illuminate\Http\Request;
use App\Models\Equipment;

class UserEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $eqp = Equipment::where('e_category','Computer Device')->get();
        $eqs = Equipment::where('e_category','Sports')->get();
        return view('dashboard.equipment.index',compact(['eqp','eqs']));
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
     * @param  \App\Models\UserEquipment  $userEquipment
     * @return \Illuminate\Http\Response
     */
    public function show(UserEquipment $userEquipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserEquipment  $userEquipment
     * @return \Illuminate\Http\Response
     */
    public function edit(UserEquipment $userEquipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserEquipment  $userEquipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserEquipment $userEquipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserEquipment  $userEquipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserEquipment $userEquipment)
    {
        //
    }
}
