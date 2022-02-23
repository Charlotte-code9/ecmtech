<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\User;
use App\Models\Equipment;
use App\Models\Reservation;
use App\Models\ActivityLogs;
use Illuminate\Http\Request;
use App\Models\NewReservation;
use App\Models\Reservation_Status;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewReservation as NotificationsNewReservation;

class NewReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Equipment::where('e_quantity', '!=', 0)->where('e_status', '!=', 'Lost')->get();
        $room = Room::all();
        return view('dashboard.make_reservation.index', compact(['item','room']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $abc = new Reservation();

        // $abc->name= $request->input('name');
        $abc->Name_item= $request->input('Name_item');
        $abc->quantity_item = $request->input('quantity_item');
        $abc->dt_item = $request->input('dt_item');
        $abc->room_item = $request->input('room_item');
        $abc->ldate_item = $request->input('ldate_item');
        $abc->status = 'In Progress';
        $abc->user_id = Auth::user()->id;
        $abc->save();

        $act = new ActivityLogs();
        $act->name = $abc->name;
        $act->description = 'makes new reservation';
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();

        $users = User::where('id', '1')->get();
        Notification::send($users, new NotificationsNewReservation($abc));

        return redirect()->back()->with('message', 'Just wait for the admins approval.');
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
     * @param  \App\Models\NewReservation  $newReservation
     * @return \Illuminate\Http\Response
     */
    public function show(NewReservation $newReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewReservation  $newReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(NewReservation $newReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewReservation  $newReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewReservation $newReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewReservation  $newReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewReservation $newReservation)
    {
        //
    }
}
