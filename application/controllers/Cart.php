<?php 

Class Cart extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');

	}

	public function add_to_cart(){
		$product_id = $this->input->post('product_er_id');
		$product_qty = $this->input->post('product_er_qty');
	    $product_info = $this->Product_Model->select_all_product_info_by_id();
		// $data = array(
	 //        'id'      => $product_info->id,
	 //        'qty'     => $product_qty,
	 //        'price'   => $product_info->regular_price,
	 //        'name'    => $product_info->title,
	 //        'options' => array('image' => $product_info->product_image)
		//  );
	$data = array(
	        'id'      => $product_id,
	        'qty'     => $product_qty,
	        'price'   => 39.95,
	        'name'    => $product_info->title,
	        'options' => array('Size' => 'L', 'Color' => 'Red', 'image' => $product_info->product_image)
	);
	echo "<pre>";
	print_r($data);
	exit();
	$this->cart->insert($data);


		redirect('Cart/show_cart');
	}


	public function show_cart(){
		$data = array();
		$data['header'] = $this->load->view('frontEnd/tp-parts/header', '', true); 
		$data['footer'] = $this->load->view('frontEnd/tp-parts/footer', '', true); 
		$data['main_slider'] = $this->load->view('frontEnd/tp-parts/main_slider', '', true); 
		
		
		$data['cart_details_content'] = $this->load->view('frontEnd/tp-parts/cart_details_content', $data, true); 


		$this->load->view('frontEnd/cart_details', $data);
	}


}