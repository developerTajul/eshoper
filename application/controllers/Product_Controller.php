<?php 

Class Product_Controller extends CI_Controller{


	public function index(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['active_products'] = $this->Product_Model->select_all_active_category();
		// $data['category_info'] = $this->Product_Model->select_all_category_info();

		$this->load->view('backEnd/products', $data);
	}



	public function save_product(){
		$data = array();
		$data['title'] = $this->input->post('product_er_title');
		$data['regular_price'] = $this->input->post('product_er_regular_price');
		$data['sale_price'] = $this->input->post('product_er_sale_price');
		$data['product_image'] = $this->input->post('product_er_image');
		$data['product_short_desc'] = $this->input->post('product_er_short_desc');
		$data['product_long_desc'] = $this->input->post('product_er_long_desc');
		$data['product_cat'] = $this->input->post('product_er_title');

		
	}

/***
*	
*	
* category section 	
*	
*	
*/	

	/**
	*
	* load category add form
	*/
	public function category(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);

		$this->load->view('backEnd/category', $data);
	}


	/**
	*
	* save category info into database
	*/
	public function save_category(){
		$data = array();
		$data['cat_name'] = $this->input->post('cat_er_name');
		$data['cat_desc'] = $this->input->post('cat_er_desc');
		$data['cat_status'] = $this->input->post('cat_er_status');

		$this->Product_Model->save_category_info($data);

		redirect('Product_Controller/category');

	}

	/**
	*
	* manage category such as edit
	*/
	public function manage_category(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['category_info'] = $this->Product_Model->select_all_category_info();

		$this->load->view('backEnd/manage_category', $data);
	}


	/**
	*
	* edit form
	*/
	public function edit_category($idd){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['edit_category_info'] = $this->Product_Model->edit_category_by_id($idd);

		$this->load->view('backEnd/edit_category', $data);
	}

	/**
	*
	* update category
	*/
	public function update_category(){
		$cat_id = $this->input->post('cat_er_id');

		$data = array();
		$data['cat_name'] = $this->input->post('cat_er_name');
		$data['cat_desc'] = $this->input->post('cat_er_desc');

		$this->Product_Model->update_category_by_id($data, $cat_id);

		redirect('Product_Controller/manage_category');
	}

	/**
	*
	* delete 
	*/




}