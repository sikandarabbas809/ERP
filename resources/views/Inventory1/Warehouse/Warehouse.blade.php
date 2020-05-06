@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')
			<div class="col-md-9">
				<div class="card card-block border-0">
			        <div class="grid_3 grid_4 animated fadeInRight">
			            <h6 class="mt-20" style="font-weight: 600;">Warehouses 
			         		<a href="{{url('/warehouse/create')}}" class="btn btn-primary btn-sm rounded">Add New Warehouse</a>
			            </h6>
			        </div>
			       
        			<hr>
        			@if(session()->has('message'))
					    <div class="alert alert-success">
					        {{ session()->get('message') }}
					    </div>
					@endif
        			
					<table id="MasterTable" class="table table-striped table-bordered">
				        <thead style="background-color: #29bb9c;">

				            <tr>
				                <th>No</th>
				                <th>Warehouse Name</th>
				                <th>Total Product</th>
				                <th>Available Stock</th>
				                <th>Sale Product</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($data as $row)
				            <tr>
				                <td>{{$row->id}}</td>
				                <td>{{$row->warehouse_name}}</td>
				                <td>400</td>
				                <td>100</td>
				                <td>300</td>
				               	<td>
				               		<a href="{{ route('warehouse.edit',$row->id) }}"class="btn btn-primary btn-xs">
				               			<span class="icon-pencil"></span> Edit
				               		</a> 
				               		
				               		<a href="del/{{$row->id}}" onclick="return confirm('Are you sure you want to Delete?')" data-object-id="3" class="btn btn-danger btn-xs  delete-object"><span class="icon-bin"></span> Delete
				               		</a>
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

@section('script')

@endsection