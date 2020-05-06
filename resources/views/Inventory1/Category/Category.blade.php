@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')
			<div class="col-md-9">
				<div class="card card-block border-0">
			        <div id="notify" class="alert alert-success" style="display:none;">
			            <a href="#" class="close" data-dismiss="alert">×</a>
			            <div class="message"></div>
			        </div>
			        <div class="grid_3 grid_4 animated fadeInRight">
			            <h6 class="mt-20" style="font-weight: 600;">Product Category 
			         		<a href="{{url('/category/create')}}" class="btn btn-primary btn-sm rounded">Add New Category</a>
			            </h6>
			        </div>
        			<hr>
        				@if(Session::has('success'))
						    <div class="alert alert-success">
						        {{Session::get('success')}}
						    </div>
						@endif
        			
					<table id="MasterTable" class="table table-striped table-bordered" style="width:100%">
				        <thead style="background-color: #29bb9c;">
				            <tr>
				                <th>No</th>
				                <th>Category Name</th>
				                <th>Total Product</th>
				                <th>Sale Product</th>
				                <th>Available Stock</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($data as $row)
				            <tr>
				                <td>{{$row->id}}</td>
				                <td>{{$row->category_name}}</td>
				                <td>{{$row->qty}}</td>
				                <td>100</td>
				                <td>300</td>
				               	<td>
				               		<a href="{{route('category.edit',$row->id)}}" class="btn btn-primary btn-xs">Edit</a> 
				               		<a href="" class="btn btn-warning btn-xs">View</a> 
				               		<a href="{{route('category.destroy',$row->id)}}" onclick="return confirm('Are you sure you want to Delete?')" data-object-id="3" class="btn btn-danger btn-xs  delete-object">Delete</a>
				               	</td>
				            </tr>
				            @endforeach
				           
				        </tfoot>
					</table>
    			</div>
			</div>
		</div>
	</div>
@endsection