<?php 

Class Product_Controller extends CI_Controller{

	// load product insert form
	public function index(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['active_products'] = $this->Product_Model->select_all_active_category();
		$data['active_brands'] = $this->Product_Model->select_all_active_brands();


		$this->load->view('backEnd/products', $data);
	}


	// insert data into table
	public function save_product(){
		$data = array();
		$data['title'] = $this->input->post('product_er_title');
		$data['regular_price'] = $this->input->post('product_er_regular_price');
		$data['sale_price'] = $this->input->post('product_er_sale_price');
/**
*		
*		
*/ 
		// $image = $_FILES['product_er_image'];
		// echo "<pre>";
		// print_r($image);
		// exit();

// 		if( empty($_FILES['product_er_image']['name'])){
// }
		

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('product_er_image'))
        {
                $error = $this->upload->display_errors();

                echo $error;
                exit();

                
        }
        else
        {
                $fdata = $this->upload->data();
                // echo "<pre>";
                // print_r($fdata);
                // exit();
                $data['product_image'] = $config['upload_path'].$fdata['file_name'];
        }



/**
*		
*		
*/		
		// $data['product_image'] = $this->input->post('product_er_image');
		$data['product_short_desc'] = $this->input->post('product_er_short_desc');
		$data['product_long_desc'] = $this->input->post('product_er_long_desc');
		$data['product_cat'] = $this->input->post('product_er_cat');


		$this->Product_Model->save_product_info($data);


		redirect('Product_Controller');		
	}


	// manage products from here
	public function manage_products(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['products_info'] = $this->Product_Model->select_all_product_info();

		$this->load->view('backEnd/manage_products', $data);

	}


	// edit manage products
	public function edit_products($idd){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['products_info'] = $this->Product_Model->select_product_info_by_id($idd);

		$this->load->view('backEnd/edit_products', $data);	
	}


	// update products
	public function update_products(){
		$idd = $this->input->post('product_er_id');
		$data = array();
		$data['title'] = $this->input->post('product_er_title');
		$data['regular_price'] = $this->input->post('product_er_regular_price');
		$data['sale_price'] = $this->input->post('product_er_sale_price');
		$product_image = $_FILES['product_er_image'];

		// echo "<pre>";
		// print_r($product_image);
		// exit();

		if( !empty( $_FILES['product_er_image']['name'] ) ){

			$config['upload_path']          = './uploads/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 10000;
	        $config['max_width']            = 10240;
	        $config['max_height']           = 7680;

	        $this->load->library('upload', $config);

	        if ( ! $this->upload->do_upload('product_er_image')){
	                $error = $this->upload->display_errors();

	                echo $error;
	                exit();
	        }else{
	                $fdata = $this->upload->data();
	                // echo "<pre>";
	                // print_r($fdata);
	                // exit();
	                $data['product_image'] = $config['upload_path'].$fdata['file_name'];
	        }
		}

		// $data['product_image'] = $this->input->post('product_er_image');
		$data['product_short_desc'] = $this->input->post('product_er_short_desc');
		$data['product_long_desc'] = $this->input->post('product_er_long_desc');


		$this->Product_Model->update_product_info_by_id($idd, $data);

		redirect('Product_Controller/manage_products');	

	}

	/**
	*
	* deactivate
	*/

	




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



	// unpublish category
	public function unpublish_category($id){
		$this->Product_Model->unpublish_category_by_id($id);

		redirect('Product_Controller/manage_category');
	}



	// publish category
	public function publish_category($idd){
		$this->Product_Model->publish_category_by_id($idd);

		redirect('Product_Controller/manage_category');
	}


	// delete category
	public function delete_category($d_id){
		$this->Product_Model->delete_category_by_id($d_id);

		redirect('Product_Controller/manage_category');
	}

	/**
	*
	*  sending data to homepage sidebar 
	*/
	


	/**
	*
	*
	*	Brand
	*
	*
	*/

	// load brands form to insert
	public function brands(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['main_content'] = $this->load->view('backEnd/tp-parts/main_content', '', true);

		$this->load->view('backEnd/brands', $data);
	}



	// save brands info to database
	public function save_brands(){
		$data = array();
		$data['name'] = $this->input->post('p_er_brand_name');
		$data['brand_desc'] = $this->input->post('p_er_brand_desc');


		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('p_er_barnd_logo'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();

                
        }
        else
        {
                $fdata = $this->upload->data();
                $data['logo'] =	$config['upload_path'].$fdata['file_name'];
        }



		// $data['logo'] = $this->input->post('p_er_barnd_logo');

		$this->Product_Model->save_brands_info($data);

		redirect('Product_Controller/brands');
	}



	// sending info to manage_brands.php
	public function manage_brands(){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['brands_info'] = $this->Product_Model->select_all_brands();

		$this->load->view('backEnd/manage_brands', $data);
	}


	// edit form of brands
	public function edit_brands($b_id){
		$data = array();
		$data['header'] = $this->load->view('backEnd/tp-parts/header', '', true);
		$data['footer'] = $this->load->view('backEnd/tp-parts/footer', '', true);
		$data['main_menu'] = $this->load->view('backEnd/tp-parts/main_menu', '', true);
		$data['brand_edit_info'] = $this->Product_Model->edit_brand_info_by_id($b_id);

		$this->load->view('backEnd/edit_brands', $data);
	}



	/**
	* update brands
	*
	*/
	public function update_brands(){
		$id = $this->input->post('p_er_brand_id');
		$data = array();
		$data['name'] = $this->input->post('p_er_brand_name');
		$data['brand_desc'] = $this->input->post('p_er_brand_desc');

		// $image = $_FILES['p_er_barnd_logo'];
		if( $_FILES['p_er_barnd_logo']['error'] === 0){

		

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('p_er_barnd_logo'))
        {
                $error =  $this->upload->display_errors();
                echo $error;
                exit();

                
        }
        else
        {
                $fdata = $this->upload->data();
                $data['logo'] =	$config['upload_path'].$fdata['file_name'];
        }

	}

		// $data['logo'] = $this->input->post('p_er_barnd_logo');

		$this->Product_Model->update_brands_by_id($data, $id);


		redirect('Product_Controller/manage_brands');

	}


	/**
	* status change: unpublish brands
	*
	*/
	public function unpublish_brand_status($p_id){

		$this->Product_Model->unpuhlish_brand_status_by_id($p_id);

		redirect('Product_Controller/manage_brands');
	}


	/**
	*
	* status change: publish brands
	*
	*/
	public function publish_brand_status($p_idd){
		$this->Product_Model->publish_brand_status_by_id($p_idd);

		redirect('Product_Controller/manage_brands');
	}

	/**
	*
	* Delete Product
	*
	*/
	public function delete_product($p_iddd){
		$this->Product_Model->delete_product_by_id($p_iddd);
		redirect('Product_Controller/manage_brands');
	}


}