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
				<table id="MasterTable" class="table table-striped table-bordered">
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
			                	<a href="" class="btn btn-success btn-xs">View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info">Download</button>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger">Remove</button>
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
			                	<a href="" class="btn btn-success btn-xs">View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info">Download</button>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger" >Remove</button>
			                	</a>
			                </td>
			            </tr>
			        </tfoot>
				</table>
			</div>
			
		</div>
	</div>
@endsection