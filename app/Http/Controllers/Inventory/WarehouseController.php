<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
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
        return view('Inventory1.Warehouse.Warehouse',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Inventory1.Warehouse.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouse = new Warehouse();
        $warehouse->warehouse_name = $request->input('warehouse_name');
        $warehouse->warehouse_desc = $request->input('warehouse_desc');
        $warehouse->bussines_loc = $request->input('bussines_loc');
        $warehouse->save();
        return redirect('/warehouse')->withSuccess('success','Your warehouse has been Added');
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
        return view('Inventory1.Warehouse.Edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $warehouse= Warehouse::findOrFail($id);
        DB::table('zenrolle_warehouse')->where('id',$id)->update(['warehouse_name'=>$request['warehouse_name'],
            'warehouse_desc'=>$request['warehouse_desc'],
            'bussines_loc'=>$request['bussines_loc']
        ]);
        $warehouse->save();

        return redirect('/product/warehouse')->with('success','Your Warehouse are updated');
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
        return redirect('/product/warehouse')->with('message','Your Warehouse Delete Successfully');
    }
}
