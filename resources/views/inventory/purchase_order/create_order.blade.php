@extends('layouts.app')

@section('content')
	
	<div class="container-fluid">
		<div class="row">
			@include('layouts.partials.header')
			<div class="col-md-9">
				<form action="{{action('PurchaseorderController@store')}}" method="post">
					
				<div class="row _newqouta">
					<div class="col-md-12 mt-10">
						<span class="font-weight-bold text-dark mr-20 bill_to">Bill From</span>
						<a href="{{url('/addsupplier')}}" class="btn btn-primary rounded-pill px-5">Add Supplier</a>
					</div>

					@if(Session::has('success'))
					    <div class="alert alert-success">
					        {{Session::get('success')}}
					    </div>
					@endif
					<div class="col-md-4">
						<div class="form-group mt-20">
							<label class="client_search">Search Supplier</label>
							<input type="text" name="search_client" class="form-control rounded-pill search_client" id="search_client" placeholder="Enter Customer Name">
						</div>

						<div class="form-group">
							<label class="client_search">Supplier Details</label>
    						<hr>
    						<div id="customer">
    							<div id="clientinfo">
    								<input type="hidden" name="customer_id" id="customer_id" value="">
    								<div id="customer_name">
    									<strong></strong>
    								</div>
    								<div id="customer_address">
    									<strong></strong>
    								</div>
    								<div id="customer_phone">
    									<strong></strong>
    								</div>
    								<div class="customer_email">
    									<strong></strong>
    								</div>
    							</div>
    						</div>
    						<hr>
						</div>
						<div class="form-group">
							<label class="client_search">Wearhouse</label>
							<select class="form-control rounded-pill">
								@foreach($data as $rows)
			                        <option value="{{$rows->id}}">{{$rows->warehouse_name}}</option>
			                    @endforeach
							</select>
						</div>
					</div>
					<div class="col-md-4">
						<div class="row mt-25">
							<span class="text-dark font-weight-bold ft-size"></span>
						</div>
						<div class="form-group">
							<label class="client_search">Invoice Number</label>
							<div class="input-group">
								<div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input type="text" class="form-control bd_r" name="invocieno" placeholder="Invoice No#">
							</div>
						</div>
						<div class="form-group">
							<label class="client_search">Order Date</label>
							<div class="input-group">
								<div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input type="date" class="form-control  bd_r" name="invoice_no" placeholder="Invoice No#">
							</div>
						</div>	
						<div class="form-group">
							<label class="client_search">Tax</label>
							<select class="form-control rounded-pill">
								<option></option>
								<option>On</option>
								<option>Inclusive</option>
								<option>Off</option>
								<option>CGST+SGST</option>
								<option>IGST</option>
							</select>
						</div>
					</div>
					<div class="col-md-4" style="margin-top: 23px;">
						<div class="form-group">
							<label  class="client_search">Reference</label>
							<div class="input-group">
								<div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input type="text" class="form-control bd_r" name="invoice_date" placeholder="Reference #">
							</div>
						</div>
						<div class="form-group">
							<label class="client_search">Order Due Date</label>
							<div class="input-group">
								<div class="input-group-prepend">
								    <span class="input-group-text" id="basic-addon1">@</span>
								</div>
								<input type="date" class="form-control bd_r" name="due_date" placeholder="Invoice No#">
							</div>
						</div>
						<div class="form-group">
							<label class="client_search">Discount</label>
							<select class="form-control rounded-pill">
								<option>% Discount After TAX</option>
								<option>Flat Discount After TAX</option>
								<option>% Discount Before TAX</option>
								<option>Flat Discount Before TAX</option>
							</select>
						</div>	
					</div>
					<label class="client_search ml-17">Invoice Note</label>
					<textarea class="form-control rounded-pill mr" rows="2"></textarea>
				</div>
				<div class="row">
					<table class="table">
						<thead class="theader">
						    <tr>
						      <th scope="col">Item Name</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Rate</th>
						      <th scope="col">Tax(%)</th>
						      <th scope="col">Tax</th>
						      <th scope="col">Discount</th>
						      <th scope="col">Amount ($)</th>
						      <th scope="col">Action</th>
						    </tr>
						</thead>
						<tbody id="items_table">
						</tbody>
					</table>
					<table>
						<thead></thead>
						<tbody id="items_table">
						    <tr style="display: table-row;">
                                <td>
                                	<strong style="margin-left: 585px; font-size: 17px"> Sub Total</strong>
                                </td>
                                <td>
                                   <input type="text" disabled="" name="subTotal" id="subTotal" class="form-control subTotal" style="margin-left: 30px;border: navajowhite; background:none;">
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                	<strong style="margin-left: 585px; font-size: 17px">Total  Tax</strong>
                                </td>
                                <td>
                                   <input type="text" disabled="" name="totalTax" id="totalTax" class="form-control" value="$ 0.00" style="margin-left: 30px;border: navajowhite; background:none;">
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                	<strong style="margin-left: 556px; font-size: 17px;"> Total Discount</strong>
                                </td>
                                <td>
                                	<span class="currenty lightMode" style="margin-left: 35px;">$</span>
                                   <span> 0.00</span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                	<strong style="margin-left: 575px; font-size: 17px">Shipping</strong>
                                </td>
                                <td>
                                	
                                   <span><input type="text" name="" class="form-control" style="margin-left: 30px;"></span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                	<strong style="margin-left: 552px; font-size: 17px">Grand Total ($)</strong>
                                </td>
                                <td>
                                   <span>
                                   	<input type="text" disabled="" name="grandTotal"  id="grandTotal"class="form-control" style="margin-left: 30px;">
                                   </span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td> Payment Terms 
                                	<select name="pterms" class="selectpicker form-control" style="width: 40%;">
                                		<option value="1">Payment On Receipt</option>
                                    </select>
                                   <!--  <div style="margin-left: -290px;margin-top: 30px;">
                                        <label>Update Stock</label>
                                        <div class="input-group">
                                            <label class="display-inline-block custom-control custom-radio ml-1">
                                                <input type="radio" name="update_stock" class="custom-control-input" value="yes" checked="">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">Yes</span>
                                            </label>
                                            <label class="display-inline-block custom-control custom-radio">
                                                <input type="radio" name="update_stock" class="custom-control-input" value="no">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description ml-0">No</span>
                                            </label>
                                        </div>
                                    </div> -->

                                </td>
                                <td hidden="">
					                <select hidden="" id="taxPercentage" class="form-control">
					                    <option hidden="" value=".10"></option>
					                    <option value=".15"></option>
					                </select>
		            			</td>
                              
                                <td>
                                	<input type="submit" class="btn btn-success sub-btn" value="Generate Order" id="submit-data" data-loading-text="Creating..."  >

                                </td>
                            </tr>
						</tbody>
					</table>
				</div>
			</form>
			</div>

		</div>
	</div>

	<script type="text/javascript">
    $(document).ready(function(){
        var count = 1;
        dynamic_field(count);


        function dynamic_field(number){
            var html ='<tr>';
            html += '<td><input type="text" name="row-name" class="form-control row-name" placeholder="Product Name or Code"></td>';

            html += '<td><input type="text" name="row-quantity" class="form-control  update row-quantity"></td>';

            html += '<td><input type="text" name="row-price"class="form-control update row-price"></td>';

            html += '<td><input type="text" name="row-tax" class="form-control update row-tax"></td>';

            html +='<td><input type="text" name="tax" class="form-control update row-tax-prec"></td>';

            html +='<td><input type="text" name="discount" class="form-control"placeholder="0.00"></td>';

            html +='<td><input type="text" disabled="0" class="form-control row-total" name=" row-total" placeholder=" $ 0.00"></td>';

           html +='<td><button type="button" name="remove" id="remove" class="btn btn-danger remove">Remove</button> </td></tr>';

            html +='<td colspan="9"><textarea id="dpid-0" class="form-control" name="product_description" placeholder="Enter Product description (Optional)" autocomplete="off"></textarea></td>';
          
            if( number > 1)
            {
                
               $('#items_table').append(html);
            }
            else
            {
                html +='<tr class="last-item-row"><td><button type="button" name="addRow" id="addRow" class="btn btn-success">Add Row</button></td></tr>';
                $('#items_table').html(html);

            }
        }
       	
        $(document).on('click','#addRow', function(){
            count ++;
            dynamic_field(count);
          
        });
        $(document).on('click','.remove', function(){
            count--;
             $(this).closest("tr").remove();
        });
        $('#items_table').on('keyup', '.update', function () {
    	debugger
	    var key = event.keyCode || event.charCode; // if the user hit del or backspace, dont do anything
	    if( key == 8 || key == 46 ) return false;
	    calculateTotals();
	});
		$('#taxPercentage').change(function () {
		    calculateTotals(); // user changed tax percentage, recalculate everything
		});
	   	function calculateTotals(){
		    debugger
		    // get all of the various input typs from the rows 
		    // each will be any array of elements
		    var nameElements = $('.row-name');
		    var quantityElements = $('.row-quantity');
		    var taxElements = $('.row-tax');
		    var priceElements = $('.row-price');
		    var taxprecElements = $('.row-tax-prec');
		    var totalElements = $('.row-total');
		    
		    // get the bottom table elements
		    var taxPercentageElement =$('#taxPercentage');
		    var subTotalElement =$('#subTotal');
		    var totalTaxElement =$('#totalTax');
		    var grandTotalElement =$('#grandTotal');

		    var subTotal=0;
		    var taxTotal=0;
		    var grandTotal=0;
		    $(quantityElements).each(function(i,e){
		        
		        // get all the elements for the current row
		        var nameElement = $('.row-name:eq(' + i + ')');
		        var quantityElement = $('.row-quantity:eq(' + i + ')');
		        var taxElement = $('.row-tax:eq(' + i + ')');
		        var priceElement = $('.row-price:eq(' + i + ')');
		        var taxprecElement = $('.row-tax-prec:eq('+i+')');
		        var totalElement = $('.row-total:eq(' + i + ')');

		        // get the needed values from this row
		        var qty = quantityElement.val().trim().replace(/[^0-9$.,]/g, ''); // filter out non digits like letters
		            qty = qty == '' ? 0 : qty; // if blank default to 0
		            quantityElement.val(qty); // set the value back, in case we had to remove soemthing
		        var price = priceElement.val().trim().replace(/[^0-9$.,]/g, '');
		            price = price == '' ? 0 : price; // if blank default to 0
		            priceElement.val(price); // set the value back, in case we had to remove soemthing
		         var taxprec = taxprecElement.val().trim().replace(/[^0-9$.,]/g, '');
		            taxprec = taxprec == '' ? 0 : taxprec; // if blank default to 0
		            taxprecElement.val(taxprec); // set the value back, in case we had to remove soemthing
		    
		        // get/set row tax and total
		         // also add to our totals for later

		        var rowPrice = (price * 1000) * qty
		            subTotal = subTotal + rowPrice +tax_b;
		        var tax_a = qty * price;
		        var tax_b = (taxprec / 100) * tax_a;

		        var tax = taxPercentageElement.val() * rowPrice;
		            taxElement.val((tax / 1000).toFixed(2));
		            taxTotal = taxTotal + tax;

		        var total =   rowPrice + tax
		            totalElement.val((total / 1000).toFixed(2));
		            grandTotal = grandTotal + total;
		    });
		    
		    // set the bottom table values
		    subTotalElement.val((subTotal / 1000).toFixed(2));   
		    totalTaxElement.val((taxTotal / 1000).toFixed(2));  
		    grandTotalElement.val((grandTotal / 1000).toFixed(2));   
		}

		// fetch_client();
		// function fetch_client(query = ''){
		// 	$.ajax({
		// 		url:"{{route('get_client.action')}}",
		// 		method:"GET",
		// 		data:{query:query},
		// 		dataType:'json',
		// 		success:function(data){
					
		// 		}
		// 	})
		// }
});
    

</script>
@endsection