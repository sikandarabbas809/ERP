<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('zenrolle_warehouse')->select('id','warehouse_name')->orderBy('id','ASC')->get();
        return view('purchasing.warehouse.warehouse',compact('data'));

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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data= DB::table('zenrolle_warehouse')->where('id',$id)->get();
        return view('purchasing.warehouse.warehouse_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $warehouse= Warehouse::findOrFail($id);
        DB::table('zenrolle_warehouse')->where('id',$id)->update(['warehouse_name'=>$request['warehouse_name'],
            'warehouse_desc'=>$request['warehouse_desc'],
            'bussines_loc'=>$request['bussines_loc']
        ]);
        $warehouse->save();

        return redirect('/warehouse')->with('success','Your Warehouse are updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        DB::table('zenrolle_warehouse')->where('id',$id)->delete();
        return redirect('/warehouse')->with('message','Your Warehouse Delete Successfully');
    }
}
