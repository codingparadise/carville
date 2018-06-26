<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->model('inventory_model');
		
	}


	public function index()
	{
		

		$this->load->view('layout/header');		
		$this->load->view('inventory');
		$this->load->view('layout/footer');	
	}
	
	
	public function get_all_products()
	{

		$data['products']=$this->inventory_model->get_all_products();
	

		$json_data = array(
			"data"            => $data['products']
		);	
		echo json_encode($json_data);
	

	}
	

		public function sell_product()
		{

		
		$id_model=$_GET['id_model'];
		
		
		
		if($this->inventory_model->sell_product($id_model)){
				die('Product Inventory Updated');				
				
			}else{
				
				die('Product Inventory Not Updated');
		}	
	

		}
	
	
	
}
