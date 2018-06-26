<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-6" style="margin-top:5%;">
      <form action="">
			<input type="text" id="add_manufacturer" placeholder="Enter Manufacturer Name" name="add_manufacturer" class="input-style"/>
			<input type="button"  class="btn btn-danger button-style" value="Add Manufacturer" id="add_manufacturer_btn" required name="add_manufacturer_btn"  onclick="add_man();"/>
				
	 </form>
    </div>

  </div>
  
  
  <div class="row">
    <div class="col-sm-10 offset-sm-1" style="margin-top:5%;">
<table id="table" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
            </tr>
        </thead>

    </table>
    </div>

  </div> 
  
  
  
  
</div>



<script>




$(document).ready(function() {
	
	// Loading of Manufacturer Data
	
    $('#table').DataTable( {
        "ajax": "<? echo site_url('/manufacturer/get_manufacturers');?>",
        "columns": [
            { "data": "id_man" },
            { "data": "manufacturer_name" }
        ]
    } );
} );


	// Function to add Manufacturer

	function add_man(){

		var manufacturer_name=$('#add_manufacturer').val();
		
		if(manufacturer_name==''){
			
			alert( 'Enter Correct Manufacturer name');
		}
		else{
			
			
			$.ajax({
			  type: "GET",
			  url: '<? echo site_url('/manufacturer/add_manufacturer');?>',
			  data: 'manufacturer_name='+manufacturer_name,
			  success: function(data){
				 $('#add_manufacturer').val(''); 
				 alert(data);
				if(data='Manufacturer Added Successfully') 
					$('#table').DataTable().ajax.reload();
				 		 
			  }
			});		
			
		}

		
		
	}



</script>