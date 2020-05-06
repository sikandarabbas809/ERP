@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include ('layouts.partials.header')
			<div class="col-md-9">
				<div class="row mt-10">
					<div class="col-md-12">
						<h4>Quotes <a href="{{url('quote/create')}}"><button type="button" class="btn btn-primary rounded-pill">Add New</button> </a>
						</h4>
					</div>
				</div>
				<hr>
				
				<table id="MasterTable" class="table table-striped table-bordered">
			        <thead style="background-color: #29bb9c;">
			            <tr>
			                <th>No</th>
			                <th>Qoute</th>
			                <th>Customer</th>
			                <th>Date</th>
			                <th>Total</th>
			                <th>Status</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			            <tr>
			                <td>1</td>
			                <td>sa-001</td>
			                <td>Sikandar</td>
			                <td>2019/12/13</td>
			                <td>N 100.0</td>
			                <td><button class="btn btn-success rounded-circle" style="font-size: 10px;">Paid</button></td>
			                <td>
			                	<a href="" class="btn btn-success btn-xs"><i class="icon-file-text"></i> View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info btn-xs">Download</button>
			                		<span class="icon-download"></span>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger btn-xs" >Remove</button>
			                	</a>
			                </td>
			            </tr>
			            <tr>
			                <td>1</td>
			                <td>sa-001</td>
			                <td>Sikandar</td>
			                <td>2019/12/12</td>
			                <td>N 100.0</td>
			                <td><button class="btn btn-success rounded-circle" style="font-size: 10px;">Paid</button></td>
			                <td>
			                	<a href="" class="btn btn-success btn-xs"><i class="icon-file-text"></i> View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info btn-xs">Download</button>
			                		<span class="icon-download"></span>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger btn-xs">Remove</button>
			                	</a>
			                </td>
			            </tr>
			           
			        </tfoot>
				</table>
				
			</div>
		</div>
	</div>

@endsection