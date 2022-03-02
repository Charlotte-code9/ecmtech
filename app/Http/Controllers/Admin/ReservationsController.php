<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Equipment;
use App\Models\AcceptedReservation;
use App\Models\Reservation_Status;
use App\Models\BorrowedItems;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AcceptReservation;
use App\Models\ActivityLogs;




class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        $app = Reservation::where('status', 'In Progress')->get();
        $acc = Reservation::where('status', 'Accepted')->get();
        return view('admin.reservations.index', compact(['app','acc','act']));
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
    public function store()
    {


    }

    public function acceptReservation(Request $request, $id)
    {

    $second = Reservation::find($id); //this will select the row with the given id
    $second->status='Accepted';
    $st = $second->Name_item;
    $uv = $second->quantity_item;
    $yv = $second->name;
    $second->save();

    $act = new ActivityLogs();
    $act->name ='Admin';
    $act->description =  'accepts borrowers reservation' ;
    $dt = Carbon::now();
    $dt->toDateTimeString();
    $act->date= $dt;
    $act->save();


   // auth()->user()->notify(new AcceptReservation($second));
    //then return to your view or whatever you want to do
    return redirect()->back()->with('message','Reservation Accepted');

    }

    public function declineReservation(Request $request, $id){
        $second = Reservation::find($id); //this will select the row with the given id
        $second->status='Declined';
        $st = $second->Name_item;
        $uv = $second->quantity_item;
        $yv = $second->name;
        $second->save();
    
        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'accepts borrowers reservation' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();

        return redirect()->back()->with('message','Reservation Declined');
    }

    public function borrow($id){
       $first = Reservation::where('id', $id)->first();
        $kl = $first->name;
        $mn = $first->Name_item;
        $st = $first->quantity_item;
        $op = $first->dt_item;
        $qr = $first->room_item;
        $bb = $first->ldate_item;
        $cc = $first->user_id;
        $first->delete();

        $second = new BorrowedItems();
        $second->bname = $kl;
        $second->bdate = $mn;
        $time = Carbon::now();
        echo $time->toDateTimeString();
        $second->itemb = $time;
        $second->bquantity = $st;
        $second->broom = $qr;
        $second->returnd = $bb;
        $second->user_id = $cc;
        $second->save();

        $item = $first->Name_item;
        $qty= $first->quantity_item;
        Equipment::where('e_brand', $item)->decrement('e_quantity', $qty);


        $bid = $second->id;

        $borrow = BorrowedItems::where('id','=',$bid)->get();
        return view('admin.reservations.invoice',compact('borrow'))->with('message','Item Borrowed Successfully!');
        //return redirect()->back()->with('message','Item Borrowed Successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return $reservation;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
    $first = Reservation::where('id', $id)->first(); //this will select the row with the given id

    //now save the data in the variables;
    $sn = $first->name;
    $cust = $first->Name_item;
    $lendon = $first->dt_item;
    $abc = $first->room_item;
    $efg = $first->ldate_item;
    $first->delete();

    $second = new AcceptedReservation();
    $second->a_name = $sn;
    $second->a_nitem = $cust;
    $second->a_dtitem = $lendon;
    $second->a_ritem = $abc;
    $second->a_ldateitem = $efg;
    $second->save();

    //then return to your view or whatever you want to do
    return redirect()->back()->with('message','Reservation Accepted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
