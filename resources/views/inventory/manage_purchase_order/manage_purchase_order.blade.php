@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')

			<div class="col-md-9">
				<div class="row mt-10">
					<div class="col-md-12">
						<h4>Purchase Orders</h4>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group row">
						    <span class="col-sm-1 col-form-label">Show</span>
                            <div class="col-sm-3">
                               	<select class="form-control">
	                               	<option value="10">10</option>
	                               	<option value="25">25</option>
	                               	<option value="50">50</option>
	                               	<option value="100">100</option>
                               	</select>
                            </div>
                            <span style="margin-top: 7px;margin-left: -10px; color: black;">entries</span>
                        </div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<div class="col-sm-5"></div>
						    <span class="col-sm-2 col-form-label text-center">Search</span>
                            <div class="col-sm-5">
                               <input type="text" name="search" class="form-control">
                            </div>
                        </div>
					</div>
				</div>
				<table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead style="background-color: #29bb9c;">
			            <tr>
			                <th>No</th>
			                <th>Order #</th>
			                <th>Supplier</th>
			                <th>Date</th>
			                <th>Amount</th>
			                <th>Status</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>1005</td>
			                <td>Sikandar</td>
			                <td>02-12-2019</td>
			                <td>N 100.0</td>
			                <td><button class="btn btn-success rounded-circle" style="font-size: 10px;">Paid</button></td>
			                <td>
			                	<a href="" class="btn btn-success rounded-circle btn-xs"><i class="icon-file-text"></i> View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info rounded-circle" style="font-size: 14px;">Download</button>
			                		<span class="icon-download"></span>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger rounded-circle" >Remove</button>
			                	</a>
			                </td>
			            </tr>
			            <tr>
			                <td>1</td>
			                <td>1009</td>
			                <td>Ali</td>
			                <td>02-12-2019</td>
			                <td>N 100.0</td>
			                <td>
			                	<button class="btn btn-warning rounded-circle" style="font-size: 10px;">Due</button>
			                </td>
			                <td>
			                	<a href="" class="btn btn-success rounded-circle btn-xs"><i class="icon-file-text"></i> View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info rounded-circle" style="font-size: 14px;">Download</button>
			                		<span class="icon-download"></span>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger rounded-circle" >Remove</button>
			                	</a>
			                </td>
			            </tr>
			        </tfoot>
				</table>
			</div>
			
		</div>
	</div>
@endsection