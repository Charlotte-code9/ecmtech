<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Graph;
use App\Models\Equipment;
use Illuminate\Http\Request;
use App\Models\ActivityLogs;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GraphController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $new = Equipment::where('e_status','New')->get();
    	$old = Equipment::where('e_status','Old')->get();
        $lost = Equipment::where('e_status','Lost')->get();
        $new_count = count($new);    	
    	$old_count = count($old);
    	$lost_count = count($lost);

        $c1 = Equipment::where('e_category','Computer Device')->get();
    	$c2 = Equipment::where('e_category','Learning Modules')->get();
        $c3 = Equipment::where('e_category','Sports')->get();
        $c4 = Equipment::where('e_category','Faculty Staffs')->get();
        $c1_count = count($c1); 
        $c2_count = count($c2);    	
    	$c3_count = count($c3);
    	$c4_count = count($c4);

        $jan = User::where('category', 'student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->month)->get();
        $jan_count = count($jan); 
        
        $act = ActivityLogs::where('name','!=', 'admin')->get();
        return view('admin.graph.index',compact(['act','new_count','old_count','lost_count','jan_count','c1_count','c2_count','c3_count','c4_count']));
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
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function show(Graph $graph)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function edit(Graph $graph)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graph $graph)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graph  $graph
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graph $graph)
    {
        //
    }
}
