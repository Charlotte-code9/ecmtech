<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Equipment;
use App\Models\ActivityLogs;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
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


        $users = User::select(DB::raw("COUNT(*) as count"))->where('category','student')->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('count');
        $months = User::select(DB::raw("Month(created_at) as month"))->where('category','student')->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');
        $datas = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($months as $index => $month) {
            $datas[$month] = $users[$index];
        }

        $act = ActivityLogs::where('name','!=', 'admin')->latest()->take(5)->get();
        return view('admin.index',compact(['act','new_count','old_count','lost_count','c1_count','c2_count','c3_count','c4_count','datas']));
    }
}
