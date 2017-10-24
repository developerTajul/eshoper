<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$data = array();
		$data['header'] = $this->load->view('frontEnd/tp-parts/header', '', true); 
		$data['footer'] = $this->load->view('frontEnd/tp-parts/footer', '', true); 
		$data['main_slider'] = $this->load->view('frontEnd/tp-parts/main_slider', '', true); 
		
		$data['category_info'] = $this->Product_Model->select_all_active_category();
		$data['left_sidebar'] = $this->load->view('frontEnd/tp-parts/left_sidebar', $data, true); 
		$data['product_info'] = $this->Product_Model->select_all_product_info();

		$data['main_content'] = $this->load->view('frontEnd/tp-parts/main_content', $data, true); 


		$this->load->view('frontEnd/home', $data);
	}


	public function product_details($p_id){
		$data = array();
		$data['header'] = $this->load->view('frontEnd/tp-parts/header', '', true); 
		$data['footer'] = $this->load->view('frontEnd/tp-parts/footer', '', true); 
		$data['main_slider'] = $this->load->view('frontEnd/tp-parts/main_slider', '', true); 
		
		$data['category_info'] = $this->Product_Model->select_all_active_category();
		$data['left_sidebar'] = $this->load->view('frontEnd/tp-parts/left_sidebar', $data, true); 
		$data['product_info'] = $this->Product_Model->select_product_info_by_id($p_id);

		$data['product_details_content'] = $this->load->view('frontEnd/tp-parts/product_details_content', $data, true); 


		$this->load->view('frontEnd/product_details', $data);
	}



}
