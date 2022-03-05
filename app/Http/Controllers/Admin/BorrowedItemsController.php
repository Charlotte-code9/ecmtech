<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BorrowedItems;
use App\Models\Equipment;
use App\Models\LostItems;
use App\Models\ReturnedItems;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ActivityLogs;

class BorrowedItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        $bt = BorrowedItems::all();
        return view('admin.borroweditem.index',compact(['bt','act']));
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

    public function return($id)
    {
        $first = BorrowedItems::where('id', $id)->first();

        $kl = $first->bname;
        $mn = $first->itemb;
        $st = $first->bquantity;
        $op = $first->bdate;
        $qr = $first->broom;
        $uv = $first->returnd;
        $first->delete();

       $second = new ReturnedItems();

        $second->rname = $kl;
        $second->itemr = $op;
        $second->rdate = $mn;
        $second->rquantity = $st;
        $second->rroom = $qr;
        $time = Carbon::now();
        echo $time->toDateTimeString();
        $second->returndate = $time;
        $second->save();

        $item = $first->bdate;
        $st= $first->bquantity;
        Equipment::where('e_brand', $item)->increment('e_quantity', $st);

        return redirect()->back()->with('message','Item Returned Successfully!');
    }

    public function lost($id)
    {
        $borrow = BorrowedItems::where('id', $id)->first();

        $kl = $borrow->bname;
        $mn = $borrow->itemb;
        $st = $borrow->bquantity;
        $op = $borrow->bdate;
        $qr = $borrow->broom;
        $uv = $borrow->returnd;
        $wx = $borrow->user_id;
        $borrow->delete();

        $lost = new LostItems();

        $lost->user_id = $wx;
        $lost->borrower_name = $kl;
        $lost->b_date = $mn;
        $lost->b_item = $op;
        $lost->qty = $st;
        $lost->b_room = $qr;
        $time = Carbon::now();
        echo $time->toDateTimeString();
        $lost->r_date = $time;
        $lost->save();

        return redirect()->back()->with('message','Item added to Lost Items List!');
    }

    public function generatereport()
    {
        $bt = BorrowedItems::all();
        return view('admin.borroweditem.report',compact('bt'));
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
     * @param  \App\Models\BorrowedItems  $borrowedItems
     * @return \Illuminate\Http\Response
     */
    public function show(BorrowedItems $borrowedItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BorrowedItems  $borrowedItems
     * @return \Illuminate\Http\Response
     */
    public function edit(BorrowedItems $borrowedItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BorrowedItems  $borrowedItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BorrowedItems $borrowedItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BorrowedItems  $borrowedItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(BorrowedItems $borrowedItems)
    {
        //
    }
}
