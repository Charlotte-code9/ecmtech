<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\ActivityLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;


class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $act = ActivityLogs::where('name','!=', 'admin')->get();
        $eqp = Equipment::all();
        return view('admin.equipment.index',compact(['eqp','act']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

     // validation here

        $validated = $request->validate([
            'e_model' => 'required',
            'e_category' => 'required',
            'e_brand' => 'required',
            'e_quantity' => 'required',
            'e_status' => 'required',
            'e_image' => 'file|required|mimes:jpg,png'
        ]);

        $eqp = new Equipment();

        $eqp->e_model= $request->input('e_model');
        $eqp->e_category = $request->input('e_category');
        $eqp->e_brand = $request->input('e_brand');
        $eqp->e_quantity = $request->input('e_quantity');
        $eqp->e_status = $request->input('e_status');
        if($request->hasFile('e_image')){
            $file = $request->file('e_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/public/e_img/',$filename);
            $eqp->e_image= $filename;
        }

        $eqp->save();

        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'adds new equipment' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();
    
            return redirect()->back()->with('message','Item added successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        return Equipment::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $eqp = Equipment::find($id);
    return view('admin.equipment.index',compact('id','eqp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $eqp = Equipment::find($id);

        $eqp->e_model= $request->input('e_model');
        $eqp->e_category = $request->input('e_category');
        $eqp->e_brand = $request->input('e_brand');
        $eqp->e_quantity = $request->input('e_quantity');
        $eqp->e_status = $request->input('e_status');
        if($request->hasFile('e_image')){
           $destination = 'storage/public/e_img/'.$eqp->e_image;
           if(File::exists($destination)){
               File::delete($destination);
           }

           $file = $request->file('e_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('storage/public/e_img/',$filename);
           $eqp->e_image= $filename;
        }

        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'updates equipment information' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();

        $eqp->update();

        return redirect()->back()->with('message','Item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        
        $equipment->delete();
        $act = new ActivityLogs();
        $act->name ='Admin';
        $act->description =  'deletes equipment' ;
        $dt = Carbon::now();
        $dt->toDateTimeString();
        $act->date= $dt;
        $act->save();
        return redirect()->back()->with('error','Item deleted successfully!');
    }




}
