<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Eborrower;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use jeremykenedy\LaravelRoles\Models\Role;
use App\Models\ActivityLogs;


class EborrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        $borrowers = DB::table('users')->where('u_category', '=', 'student')->orwhere('u_category', '=', 'faculty')->get();
        return view('admin.borrower.index',compact(['borrowers','act']));
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
     * @param  \App\Models\Eborrower  $eborrower
     * @return \Illuminate\Http\Response
     */
    public function show(Eborrower $eborrower)
    {
        return Eborrower::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eborrower  $eborrower
     * @return \Illuminate\Http\Response
     */
    public function edit(Eborrower $eborrower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eborrower  $eborrower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eborrower $eborrower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eborrower  $eborrower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eborrower $eborrower)
    {
        //
    }
}
