<?php 

Class Slider_Controller extends CI_Controller{

	public function index(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);


		$this->load->view('backEnd/main_slider', $data);
	}

}