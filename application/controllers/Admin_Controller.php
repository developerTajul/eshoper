<?php 

Class Admin_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();

		$info = $this->session->userdata('id');

		if($info){
			redirect('Superadmin');
		}

	}


	public function index(){
		$this->load->view('backEnd/login');
		
	}


	public function login_check(){
		
		$userName = $this->input->post('admin_er_username');
		$passWord = $this->input->post('admin_er_password');

		$result = $this->Admin_Model->login_check_info($userName, $passWord);

		$data = array();
		if($result){
			$data['id'] = $result->id;
			$data['name'] = $result->name;

			$this->session->set_userdata($data);
			redirect('Superadmin');
		}else{
			$data['error'] = "User Name and Password Does Not Work";

			$this->session->set_userdata($data);
			redirect('Admin_Controller');
		}

	}


}