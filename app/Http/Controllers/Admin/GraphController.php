<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Graph;
use App\Models\Equipment;
use App\Models\BorrowedItems;
use App\Models\ReturnedItems;
use App\Models\LostItems;
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

        $janf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '01')->count();
        $jans = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '01')->count();

        $febf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '02')->count();
        $febs = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '02')->count();

        $marf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '03')->count();
        $mars = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '03')->count();
        
        $aprf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '04')->count();
        $aprs = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '04')->count();

        $mayf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '05')->count();
        $mays = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '05')->count();

        $junf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '06')->count();
        $juns = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '06')->count();

        $julf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '07')->count();
        $juls = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '07')->count();
        
        $augf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '08')->count();
        $augs = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '08')->count();

        $sepf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '09')->count();
        $seps = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '09')->count();

        $octf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '10')->count();
        $octs = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '10')->count();

        $novf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '11')->count();
        $novs = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '11')->count();

        $decf = User::where('u_category', 'Faculty')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '12')->count();
        $decs = User::where('u_category', 'Student')->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '12')->count();



       
        $janb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '1')->count();
        $janr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '1')->count();
        $janl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '1')->count();

        $febb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '2')->count();
        $febr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '2')->count();
        $febl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '2')->count();

        $marb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '3')->count();
        $marr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '3')->count();
        $marl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '3')->count();

        $aprb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '4')->count();
        $aprr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '4')->count();
        $aprl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '4')->count();

        $mayb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '5')->count();
        $mayr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '5')->count();
        $mayl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '5')->count();

        $junb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '6')->count();
        $junr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '6')->count();
        $junl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '6')->count();

        $julb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '7')->count();
        $julr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '7')->count();
        $jull = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '7')->count();

        $augb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '8')->count();
        $augr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '8')->count();
        $augl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '8')->count();

        $sepb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '9')->count();
        $sepr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '9')->count();
        $sepl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '9')->count();

        $octb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '10')->count();
        $octr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '10')->count();
        $octl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '10')->count();

        $novb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '11')->count();
        $novr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '11')->count();
        $novl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '11')->count();

        $decb = BorrowedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '12')->count();
        $decr = ReturnedItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '12')->count();
        $decl = LostItems::whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', '12')->count();

        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        return view('admin.graph.index',compact(['act','new_count','old_count','lost_count','c1_count','c2_count','c3_count','c4_count','jans','janf',
        'febf','febs','marf','mars','aprf','aprs','mayf','mays','junf','juns','julf','juls','augf','augs','sepf','seps','octf','octs','novf','novs','decf'
        ,'decs','janb','janr','janl','febb','febr','febl','marb','marr','marl','aprb','aprr','aprl','mayb','mayr','mayl','junb','junr','junl','julb','julr','jull',
        'augb','augr','augl','sepb','sepr','sepl','octb','octr','octl','novb','novr','novl','decb','decr','decl']));
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
