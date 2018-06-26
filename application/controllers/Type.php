<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends CI_Controller {


	public function __construct(){
		
		parent::__construct();
		$this->load->model('car_model');
		$this->load->model('manufacturer_model');
		
	}


	public function index()
	{
		$data['manufacturers']=$this->manufacturer_model->get_manufacturers();

		$this->load->view('layout/header');		
		$this->load->view('model',$data);
		$this->load->view('layout/footer');	
	}
	
	
	
	public function get_car_models()
	{

		$data['models']=$this->car_model->get_car_models();


		$json_data = array(
			"data" => $data['models']
		);	
		echo json_encode($json_data);
	

	}
	
	
	
	public function add_car_model()
	{
		

		$model=$_GET['model_name'];
		$id_manufacturer=$_GET['id_manufacturer'];
		$inventory=$_GET['inventory'];
		
		
		if(!empty($model))
		{
			if($this->car_model->add_car_model($model,$id_manufacturer,$inventory)){
				die('Model Added Successfully');				
				
			}else{
				
				die('Model Not Added');
			}	
		}
		
	}		
	
	
	
	
	
	
	
	
	
	
	
	
}
