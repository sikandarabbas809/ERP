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
			            <h5 class="mt-20" style="font-weight: 600;">Products 
			         		<a href="{{url('/create')}}" class="btn btn-primary btn-sm rounded">Add new</a>
			            </h5>
			           
			            @if(session()->has('message'))
						    <div class="alert alert-success">
						        {{ session()->get('message') }}
						    </div>
						@endif
						<div class="row">
			                <div class="col-xl-4 col-lg-6 col-xs-6">
			                    <div class="card border" style="box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.05);border-radius: 0;">
			                        <div class="card-body">
			                            <div class="card-block">
			                                <div class="media">
			                                    <div class="media-body text-xs-left">
			                                        <h3 class="green"id="dash_0">2</h3>
			                                        <span>In Stock</span>
			                                    </div>
			                                    <div class="media-right media-middle">
			                                        <i class="icon-rocket green font-large-2 float-xs-right"></i>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="col-xl-4 col-lg-6 col-xs-6">
			                    <div class="card border" style="box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.05);border-radius: 0;">
			                        <div class="card-body">
			                            <div class="card-block">
			                                <div class="media">
			                                    <div class="media-body text-xs-left">
			                                        <h3 class="red"><span id="dash_1">0</span></h3>
			                                        <span>Stock out</span>
			                                    </div>
			                                    <div class="media-right media-middle">
			                                        <i class="icon-blocked red font-large-2 float-xs-right"></i>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="col-xl-4 col-lg-6 col-xs-6">
			                    <div class="card border" style="box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.05);border-radius: 0;">
			                        <div class="card-body">
			                            <div class="card-block">
			                                <div class="media">
			                                    <div class="media-body text-xs-left">
			                                        <h3 class="cyan" id="dash_2">2</h3>
			                                        <span>Total</span>
			                                    </div>
			                                    <div class="media-right media-middle">
			                                        <i class="icon-stats-bars22 cyan font-large-2 float-xs-right"></i>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
        			<hr>
					<table  id="MasterTable" class="table table-striped table-bordered">
				        <thead style="background-color: #29bb9c;">
				            <tr>
				                <th>No</th>
				                <th>Name</th>
				                <th>qty</th>
				                <th>Code</th>
				                <th>Category</th>
				                <th>Sale Price</th>
				                <th>Purchase Price</th>
				                <th>Setting</th>
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach($data as $rows)
				            <tr>
				            	
				                <td>{{$rows->id}}</td>
				                <td>
				                	<span class="avatar-lg align-baseline"><img src="
				                	{{URL::asset('public_path/image/'.$rows->image) }}" style="width: 60px;height: 40px;"></span> {{$rows->product_name}}
				                </td>
				                <td>{{$rows->qty}}</td>
				                <td>{{$rows->product_code}}</td>
				                <td>{{$rows->category_name}}</td>
				                <td>${{$rows->retail_price}}</td>
				                <td>${{$rows->wholsale_price}}</td>
				               <td>
				               	<input type="hidden" name="user_id" value="{{$rows->id}}">
				               		<a href="{{route('create.edit',$rows->id)}}"class="btn btn-primary btn-xs">
				               		<span class="icon-pencil"></span> Edit</a> 

	                               	<a href="delete/{{ $rows->id }}" data-object-id="" onclick="return confirm('Are you sure you want to remove this data?')"  class="btn btn-danger btn-xs "><span class="icon-bin"></span> Delete</a>
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