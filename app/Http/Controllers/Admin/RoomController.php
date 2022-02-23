<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\ActivityLogs;
use Carbon\Carbon;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->get();
        $eqps = Room::all();
        return view('admin.room.index',compact(['eqps','act']));
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
        $validated = $request->validate([
            'e_roomname' => 'required',

        ]);

        $eqps = new Room();
        $eqps->e_roomname= $request->input('e_roomname');

        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'adds new room' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();

        $eqps->save();
        return redirect()->back()->with('message','Room added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $eqps = Room::find($id);
        $eqps->e_roomname= $request->input('e_roomname');

        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'updates room information' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();

        $eqps->update();
        return redirect()->back()->with('message','Room updated  successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();

        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'deletes room ' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();

        return redirect()->back()->with('error','Room Deleted!');
    }
}
