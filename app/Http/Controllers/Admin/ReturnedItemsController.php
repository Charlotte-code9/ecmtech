<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ReturnedItems;
use Illuminate\Http\Request;
use App\Models\ActivityLogs;
use Illuminate\Support\Facades\DB;

class ReturnedItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        $rt = ReturnedItems::all();
        return view('admin.returneditems.index',compact(['rt','act']));
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


    function daterange(Request $request)
    {


        $fromDate = $request->input('from_date');
        $toDate = $request->input('end_date');

        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        $rt = DB::select("SELECT * FROM returneditem WHERE created_at BETWEEN '$fromDate 00:00:00' AND '$toDate 23:59:59'");
        return view('admin.returneditems.index',compact(['rt','act']));

    }


    public function generate(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('end_date');

        $bt = DB::select("SELECT * FROM returneditem WHERE created_at BETWEEN '$fromDate 00:00:00' AND '$toDate 23:59:59'");
        return view('admin.returneditems.report',compact('bt'));
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
     * @param  \App\Models\ReturnedItems  $returnedItems
     * @return \Illuminate\Http\Response
     */
    public function show(ReturnedItems $returnedItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReturnedItems  $returnedItems
     * @return \Illuminate\Http\Response
     */
    public function edit(ReturnedItems $returnedItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReturnedItems  $returnedItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReturnedItems $returnedItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReturnedItems  $returnedItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReturnedItems $returnedItems)
    {
        //
    }
}
