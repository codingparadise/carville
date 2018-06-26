<?php
class Car_model extends CI_Model
	{
		
		public function __construct(){				
				parent::__construct();
			}

		public function get_car_models(){
			$this->db->select('id_model,model_name');
			$this->db->from('models');
			$query = $this->db->get();
				//echo $this->db->last_query();

			return $results=$query->result_array();
		}
		
		
			public function add_car_model($model=null,$id_manufacturer=null,$inventory=null){
			$data = array(
					'model_name' => $model,
					'id_manufacturer' => $id_manufacturer,
					'inventory' => $inventory
			);

			
			if($this->db->insert('models', $data)){
				return true;
			}else{
				
				return false;
			}
		}	

			
	}

?>