@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')
			<div class="col-md-9">
				<div class="card card-block">
				 	<div class="row">
						<h3 style="margin-top: 20px;margin-left: 30px;">Add New Category</h3>
					</div>
					<hr>
		            <form method="post" id="data_form" actioin="Add_product_categoryController@store">
		            	  {{ csrf_field() }}
		             
		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label text-center" for="product_catname">Category Name</label>
		                    <div class="col-sm-8">
		                        <input type="text" placeholder="Product Category Name" class="form-control margin-bottom  required" name="category_name">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label text-center" for="product_catname">Description</label>
		                    <div class="col-sm-8">
		                        <input type="text" placeholder="Product Category Short Description" class="form-control margin-bottom required" name="category_desc">
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label text-center" for="product_catname">Sub Category</label>
		                    <div class="col-sm-8">
		                        <input type="text" name="sub_category" class="form-control margin-bottom" placeholder="Subcategory">
		                    </div>
		                </div>
		                <!-- <input type="hidden" name="company_id" value="1"> -->
		                <div class="form-group row subcategory">
		                   <label class="col-sm-2 col-form-label text-center" for="product_catname">Bussines Location</label>
		                    <div class="col-sm-8">
		                        <input type="text" name="bussines_loc" class="form-control margin-bottom" placeholder="Bussines Location">
		                        
		                    </div>
		                </div>
		                <div class="form-group row">
		                    <label class="col-sm-2 col-form-label"></label>
		                    <div class="col-sm-8">
		                        <input type="submit" id="submit-data" class="btn btn-success margin-bottom" value="Add Category" data-loading-text="Adding...">
		                        <input type="hidden" value="productcategory/addcat" id="action-url">
		                    </div>
		                </div>
		            </form>
		        </div>
			</div>
		</div>
	</div>
@endsection