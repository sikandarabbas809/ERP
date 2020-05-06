	<script type="text/javascript">
    $(document).ready(function(){
       	
    	dynamic_field(1, null);

        $("#add").click(function(){
        	debugger;
        	var obj = $(this);
            dynamic_field(1, obj);
        });
        $("#remove").click(function(){
        	debugger;
        	var obj = $(this);
            dynamic_field(0, obj);
        });
    });




    function dynamic_field(number, obj){
    	debugger
        var html ='<tr>'+
        '<td rowspan="2">1</td>' +
         '<td><input type="text" name="item_name" class="form-control" placeholder="Product Name or Code"></td>'+
        '<td><input type="text" name="quantity"class="form-control"></td>'+
        '<td><input type="text" name="rate"class="form-control"></td>'+
        '<td><input type="text" name="tax_prec" class="form-control"></td>'+
        '<td><input type="text" name="tax" disabled="0" class="form-control"></td>'+
        '<td><input type="text" name="discount" class="form-control"placeholder="0.00"></td>'+
        '<td><input type="text" disabled="0" class="form-control" name="amount" placeholder=" $ 0.00"></td>'+
        '<td><button type="button" name="remove" id="remove" class="btn btn-danger">Remove</button> </td></tr>'+
        '<tr><td colspan="9"><textarea id="dpid-0" class="form-control" name="product_description" placeholder="Enter Product description (Optional)" autocomplete="off"></textarea><br></td></tr>';
      
        if( number > 0 && obj != null)
        {
            $(obj).closest('tr').before(html);
        }
        else if ( number > 0 && obj == null) 
        {
        	$('tbody').append(html);
           html +='<tr><td><button type="button" name="add" id="add" class="btn btn-success">Add Row</button></td></tr>';
            $('tbody').html(html);
        }
        else if (number == 0 && obj != null) 
        {
			$(obj).closest('tr').remove();            
        }
    }

</script>