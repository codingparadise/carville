<?php
class Manufacturer_model extends CI_Model
	{
		
		public function __construct(){				
				parent::__construct();
			}

		public function get_manufacturers(){
			$this->db->select('id_man,manufacturer_name');
			$this->db->from('manufacturers');
			$query = $this->db->get();
				//echo $this->db->last_query();
			return $results=$query->result_array();
		}
		
		
			public function add_manufacturer($manufacturer=null){
			$data = array(
					'manufacturer_name' => $manufacturer
			);

			if($this->db->insert('manufacturers', $data)){
				
				return true;
			}else{
				
				return false;
			}
		}	

			
	}

?>