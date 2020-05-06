<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Add_Product_Category;
use App\SubCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =DB::table('zenrolle_produts')->join('zenrolle_product_categories','zenrolle_produts.category_id','=','zenrolle_product_categories.id')->select('qty','zenrolle_produts.id','zenrolle_product_categories.category_name')->get();
        return view('Inventory1.Category.Category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Inventory1.Category.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Add_Product_Category();
        $category->category_name = $request->input('category_name');
        $category->category_desc = $request->input('category_desc');
        $category->bussines_loc = $request->input('bussines_loc');
        $category->save();
        $subcategory = new SubCategory();
        $subcategory->category_id = $category->id;
        $subcategory->sub_category = $request->input('sub_category');
        $subcategory->save();
        return redirect('/category')->withSuccess('Your Category has been Added');
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
        $edit_product = DB::table('zenrolle_produts')->join('zenrolle_product_categories','zenrolle_produts.category_id','=','zenrolle_product_categories.id')->select('zenrolle_product_categories.id','zenrolle_product_categories.category_name','zenrolle_product_categories.bussines_loc','zenrolle_product_categories.category_desc')->where('zenrolle_produts.id',$id)->get();
        return view('Inventory1.Category.Edit',compact('edit_product'));

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
       $updatecat = Add_Product_Category::findOrFail($id);
        DB::table('zenrolle_product_categories')->where('id',$id)->update(['category_name'=>$request['category_name'],
            'category_desc'=>$request['category_desc'],
            'bussines_loc'=>$request['bussines_loc']
        ]);
        $updatecat->save();
        return redirect('/category')->with('success','Your Category are updated');
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
