<?php 

Class Superadmin extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$info = $this->session->userdata('id');

		if(!$info){
			redirect('Admin_Controller');
		}

	}

	public function index(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['main_content'] = $this->load->view('backEnd/tp-parts/main_content', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);

		$this->load->view('backEnd/dashboard', $data);
	}



	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');

		redirect('Superadmin/logout');
	}
}