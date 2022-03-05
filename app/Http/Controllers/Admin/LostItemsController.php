<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LostItems;
use App\Models\ActivityLogs;
use Illuminate\Http\Request;

class LostItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        $lost = LostItems::all();
       return view('admin.lostitems.index',compact(['act','lost']));
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

    public function generate()
    {
        $bt = LostItems::all();
        return view('admin.lostitems.report',compact('bt'));
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
     * @param  \App\Models\LostItems  $lostItems
     * @return \Illuminate\Http\Response
     */
    public function show(LostItems $lostItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LostItems  $lostItems
     * @return \Illuminate\Http\Response
     */
    public function edit(LostItems $lostItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LostItems  $lostItems
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LostItems $lostItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LostItems  $lostItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(LostItems $lostItems)
    {
        //
    }
}
