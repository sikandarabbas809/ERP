@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')
			
			<div class="col-md-9">
				<div class="row mt-10">
					<div class="col-md-12">
						<h3>Invoices <a href="{{url('/invoice/create')}}"><button type="button" class="btn btn-primary rounded-pill">Add New</button> </a>
						</h3>
					</div>
				</div>
				<hr>
				<table id="MasterTable" class="table table-striped table-bordered">
			        <thead class="sale_invoice">
			            <tr>
			                <th>No</th>
			                <th>Invoice No</th>
			                <th>Customer</th>
			                <th>Date</th>
			                <th>Amount</th>
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
			                <td>
			                	<button class="btn btn-success rounded-circle paid">Paid</button>
			                </td>
			                <td>
			                	<a href="" class="btn btn-success rounded-circle btn-xs"><i class="icon-file-text"></i> View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info rounded-circle download">Download</button>
			                		<span class="icon-download"></span>
			                	</a>
			                	<a href="">
			                		<button class="btn btn-danger rounded-circle" >Remove</button>
			                	</a>
			                </td>
			            </tr>
			            <tr>
			                <td>1</td>
			                <td>sa-001</td>
			                <td>Sikandar</td>
			                <td>2019/12/12</td>
			                <td>N 100.0</td>
			                <td>
			                	<button class="btn btn-success rounded-circle paid">Paid</button>
			                </td>
			                <td>
			                	<a href="" class="btn btn-success rounded-circle btn-xs"><i class="icon-file-text"></i> View</a>

			                	<a href="" title="Download">
			                		<button class="btn btn-info rounded-circle download">Download</button>
			                		<span class="icon-download"></span>
			                	</a>

			                	<a href="">
			                		<button class="btn btn-danger rounded-circle" >Remove</button>
			                	</a>
			                </td>
			            </tr>
			        </tbody>
			        <tfoot>
					    <tr>
					      <th>No</th>
			                <th>Invoice No</th>
			                <th>Customer</th>
			                <th>Date</th>
			                <th>Amount</th>
			                <th>Status</th>
			                <th>Action</th>
					    </tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>

@endsection