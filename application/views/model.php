<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<div class="container">
  <div class="row">
    <div class="col-sm-11 offset-sm-1" style="margin-top:5%;">
      <form action="">

			<input type="text" id="model_add " class="input-style" name="model_add" placeholder="Enter Model Name"/>
			<select name="id_manufacturer" id="id_manufacturer" class="input-style">
				<option value="">Select Manufacturer</option>
				<?php foreach($manufacturers as $manufacturer) {?>
				
					<option value="<?=$manufacturer['id_man']?>"><?=$manufacturer['manufacturer_name']?></option>
				
				<?php } ?>
			
			</select>	
						<input type="text" id="inventory" name="inventory" placeholder="Enter Inventory" class="input-style"/>	
			<input type="button"  class="btn btn-danger button-style" value="Add Model" id="model_add_btn" required name="model_add_btn" onclick="add_model();"/>

			
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
	
	// Loading of Model Data
	
    $('#table').DataTable( {
        "ajax": "<? echo site_url('/type/get_car_models');?>",
        "columns": [
            { "data": "id_model" },
            { "data": "model_name" }
        ]
    } );
} );




	function add_model(){
		
		// Function to add Model

		var model_name=$('#model_add').val();
		var id_manufacturer=$('#id_manufacturer').val();
		var inventory=$('#inventory').val();
		
		if(model_name==''){
			
			alert( 'Enter Correct Model name');
		}
		else if(id_manufacturer==''){
			
			alert( 'Select Manufacturer name');
		}
		else if(inventory==''){
			
			alert( 'Enter Correct Inventory');
		}		
		else{
			
			
			$.ajax({
			  type: "GET",
			  url: '<? echo site_url('/type/add_car_model');?>',
			  data: 'model_name='+model_name+'&id_manufacturer='+id_manufacturer+'&inventory='+inventory,
			  success: function(data){
				 $('#model_add').val(''); 
				 $('#id_manufacturer').val(''); 
				 $('#inventory').val(''); 
				 alert(data);
				if(data='Model Added Successfully') 
					$('#table').DataTable().ajax.reload();
				 		 
			  }
			});		
			
		}

		
		
	}



</script>