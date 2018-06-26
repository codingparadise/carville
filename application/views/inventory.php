<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<div class="container">

  <div class="row">
    <div class="col-sm-10 offset-sm-1" style="margin-top:5%;">
<table id="table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
			    <th>Sr No</th>
                <th>Manufacturer Name</th>
				<th>Model Name</th>
				<th>Count</th>
                <th>Action</th>
            </tr>
        </thead>

    </table>
    </div>

  </div> 
  
  
  
  
</div>



<script>




$(document).ready(function() {
	
	// Loading of Inventory,Model and Manufacturer Data
	
    $('#table').DataTable( {
        "ajax": "<? echo site_url('/inventory/get_all_products');?>",
        "columns": [
		    { "data": "id_model" },
            { "data": "manufacturer_name" },
            { "data": "model_name" },
            { "data": "inventory" },
			{"mRender": function ( data, type, row ) {
                        return '<button type="button" class="btn btn-success" onclick="sell_product('+row.id_model+');">Sold</button>';}
                }
        ]
    } );
} );




	function sell_product(id_model){

		
			// Function to remove stock from inventory
			
			$.ajax({
			  type: "GET",
			  url: '<? echo site_url('/inventory/sell_product');?>',
			  data: 'id_model='+id_model,
			  success: function(data){
				 alert(data);
				if(data='Added Successfully') 
					$('#table').DataTable().ajax.reload();
				 		 
			  }
			});		

		
		
	}



</script>