<?php
class Inventory_model extends CI_Model
	{
		
		public function __construct(){				
				parent::__construct();
			}

		public function get_all_products(){
			$this->db->select('id_model,model_name,manufacturer_name,inventory');
			$this->db->from('models');
			$this->db->join('manufacturers','models.id_manufacturer=manufacturers.id_man','INNER');
			$this->db->where('inventory>', 0);
			$query = $this->db->get();
				//echo $this->db->last_query();
			return $results=$query->result_array();
		}
		
		
			public function sell_product($id_model=null){

			$SQl="UPDATE models SET inventory=inventory-1 WHERE id_model=".$id_model;
			
			if($this->db->query($SQl)){				
				return true;
			}else{
				
				return false;
			}
		}	

			
	}

?>