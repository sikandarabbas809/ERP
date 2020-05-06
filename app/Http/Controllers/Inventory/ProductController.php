<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $data = DB::table('zenrolle_produts')->join('zenrolle_product_categories','zenrolle_produts.category_id','=','zenrolle_product_categories.id')->select('zenrolle_product_categories.category_name','zenrolle_produts.id','product_name','qty','product_code','retail_price','wholsale_price','image')->orderBy('id','DESC')->get();
        return view('Inventory1.Product.Product',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('zenrolle_product_categories')->
                select('id','category_name')->get();
        $warehouse = DB::table('zenrolle_warehouse')->select('id','warehouse_name')->get();
          return view('Inventory1.Product.Create',compact('warehouse','category'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product;
        $product->company_id = $request->input('company_id');
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
        $product->warehouse = $request->input('warehouse');
        $product->product_code = $request->input('product_code');
        $product->retail_price = $request->input('retail_price');
        $product->wholsale_price = $request->input('wholsale_price');
        $product->tax_rate = $request->input('tax_rate');
        $product->discount_rate = $request->input('discount_rate');
        $product->qty = $request->input('qty');
        $product->alert_qty = $request->input('alert_qty');
        $product->barcode = $request->input('barcode');
        $product->product_desc = $request->input('product_desc');
        $product->emp_bonus = $request->input('emp_bonus');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('public_path/image',$filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect('/product')->withsuccess('success','Add Product Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = DB::table('zenrolle_product_sub_category')->where('category_id',$id)->select('sub_category','id')->get();
        return json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
