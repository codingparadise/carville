<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturer extends CI_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->model('manufacturer_model');

		
	}



	public function index()
	{

		$this->load->view('layout/header');		
		$this->load->view('manufacturer',$data);
		$this->load->view('layout/footer');	
	}

	
	
	public function get_manufacturers()
	{

		$data['manufacturers']=$this->manufacturer_model->get_manufacturers();
	

		$json_data = array(
			"data"            => $data['manufacturers']
		);	
		echo json_encode($json_data);
	

	}
	
	
	
	public function add_manufacturer()
	{
		

		$manufacturer=$_GET['manufacturer_name'];
		
		
		if(!empty($manufacturer))
		{
			if($this->manufacturer_model->add_manufacturer($manufacturer)){
				die('Manufacturer Added Successfully');				
				
			}else{
				
				die('Manufacturer Not Added');
			}	
		}
		
	}	
	
	
	
	
}
