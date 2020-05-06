@extends('layouts.app')

@section('content')
<!-- <h2>{{Auth::user()->email}}</h2> -->
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')
			<div class="col-md-9">
				<div class="row mt-10">
					<div class="col-md-3">
						<a href="{{url('/pos')}}" style="text-decoration: none;">
							<div class="card _card">
				                <div class="card-body _card_body">
					                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center card_content" style="">
					                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 content_color">POS Sales</h3>
					                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0 mt-25">
					                    	<img src="{{asset('image/sale-icon/1.png')}}">
					                    </i>
					                </div> 
				                  	<p class="card-title text-md-center text-xl-left mt-10">Total Invoice</p> 
				                </div>
	             			</div>
	             		</a>
					</div>
					<div class="col-md-3">
						<a href="{{url('/invoice/create')}}">
							<div class="card _card">
				                <div class="card-body _card_body">
					                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center card_content" style="">
					                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 content_color">New Sale <br> Invoices</h3>
					                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0 mt-25">
					                    	<img src="{{asset('image/sale-icon/1.png')}}">
					                    </i>
					                </div> 
				                  	<p class="card-title text-md-center text-xl-left mt-10">Total Invoice</p> 
				                </div>
	             			</div>
	             		</a>
					</div>
					<div class="col-md-3">
						<a href="{{url('/invoice')}}">
							<div class="card _card">
				                <div class="card-body _card_body">
					                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center card_content">
					                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 content_color">Manage <br>Invoice Of Sale</h3>
					                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0 mt-25">
					                    	<img src="{{asset('image/sale-icon/2.png')}}">
					                    </i>
					                </div> 
				                  	<p class="card-title text-md-center text-xl-left mt-10">This Month Invoices</p> 
				                </div>
	             			</div>
	             		</a>
					</div>
					<div class="col-md-3">
						<a href="{{url('/quote/create')}}">
							<div class="card _card">
				                <div class="card-body _card_body">
					                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center card_content">
					                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 content_color" >New Quota <br> for Sale</h3>
					                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0 mt-25">
					                    	<img src="{{asset('image/sale-icon/3.png')}}">
					                    </i>
					                </div> 
				                  	<p class="card-title text-md-center text-xl-left mt-10">Today Sales</p> 
				                </div>
	             			</div>
	             		</a>
					</div>
				</div>
				<div class="row mt-20">
					<div class="col-md-3">
						<a href="{{url('/quote')}}">
							<div class="card _card">
			                <div class="card-body _card_body">
				                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center card_content">
				                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 content_color" >Manage Quota <br>Sale</h3>
				                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0 mt-25">
				                    	<img src="{{asset('image/sale-icon/4.png')}}">
				                    </i>
				                </div> 
			                  	<p class="card-title text-md-center text-xl-left mt-10">This Month Sales</p> 
			                </div>
             			</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
