<?php 

Class Cart extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('cart');

	}

	public function add_to_cart(){
		$product_id = $this->input->post('product_er_id');
		$product_qty = $this->input->post('product_er_qty');

	    $product_info = $this->Product_Model->select_all_product_info_by_id($product_id);

		 $data = array(
	        'id'      => 'sku_123ABC',
	        'qty'     => $product_qty,
	        'price'   => $product_info->regular_price,
	        'name'    => $product_info->title,
	        'options' => array('Size' => 'L', 'Color' => 'Red', 'image' => $product_info->product_image)
		);

		 
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


/***
*
* delete cart item
*
*/
	public function delete_from_cart($rowid){
		$data = array(
		        'rowid' => $rowid,
		        'qty'   => 0
		);

		$this->cart->update($data);

		redirect('Cart/show_cart');
	}

/***
*
* update cart item
*
*/
	public function update_cart_item(){
		$quantity = $this->input->post('quantity');
		$rowid = $this->input->post('rowid');

		$data = array(
		        'rowid' => $rowid,
		        'qty'   => $quantity
		);

		$this->cart->update($data);

		redirect('Cart/show_cart');
	}

}