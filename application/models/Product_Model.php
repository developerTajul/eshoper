<?php 

Class Product_Model extends CI_Model{

	public function save_product_info($data){
		$this->db->insert('products_tbl', $data);
	}


	/**
	*
	* Sending product info to manage_products.php
	*/
	public function select_all_product_info(){
		$this->db->select('*');
		$this->db->from('products_tbl');
		$query_result = $this->db->get();
		$result = $query_result->result();

		return $result;
	}


	/**
	*
	* sending product info to edit_products.php
	*/
	public function select_product_info_by_id($p_id){
		$this->db->select('*');
		$this->db->from('products_tbl');
		$this->db->where('id', $p_id);
		$query_result = $this->db->get();
		$result = $query_result->row();

		return $result;
	}


	/***
	*
	*
	*/
	public function update_product_info_by_id($idd, $data){
		$this->db->where('id', $idd);
		$this->db->update('products_tbl', $data);
	}




	/**
	*
	* Sending product info to cart.php
	*/
	public function select_all_product_info_by_id($product_id){
		$this->db->select('*');
		$this->db->from('products_tbl');
		$this->db->where('id', $product_id);
		// $this->db->join('product_brands_tbl', 'product_brands_tbl.id = products_tbl.id');
		// $this->db->join('admin_info', 'admin_info.id = products_tbl.id');
		// $this->db->join('product_cat_tbl', 'product_cat_tbl.id = products_tbl.id');

		$query_result = $this->db->get();
		$result = $query_result->row();

		return $result;
	}


// $this->db->select('*');
// $this->db->from('blogs');
// $this->db->join('comments', 'comments.id = blogs.id');
// $query = $this->db->get();



/***
**************************************************
**************************************************
**************************************************
*
* Category info
*
*************************************************
*************************************************
*************************************************
***/



	/**
	*
	* insert category info into database
	*/
	public function save_category_info($data){
		$this->db->insert('product_cat_tbl', $data);
	}


	/**
	*
	* 
	*/
	public function select_all_category_info(){
		$this->db->select('*');
		$this->db->from('product_cat_tbl');
		$query_result = $this->db->get();
		$result = $query_result->result();

		return $result;
	}

	/**
	*
	*
	*/
	public function edit_category_by_id($idd){
		$this->db->select('*');
		$this->db->from('product_cat_tbl');
		$this->db->where('id', $idd);
		$query_result = $this->db->get();
		$result = $query_result->row();

		return $result;
	}


	/**
	* update category
	*
	*/
	public function update_category_by_id($data, $cat_id){
		$this->db->where('id', $cat_id);
		$this->db->update('product_cat_tbl', $data);
	}


	// unpublish category
	public function unpublish_category_by_id($id){
		$this->db->set('cat_status', 0);
		$this->db->where('id', $id);
		$this->db->update('product_cat_tbl');
	}


	// publish category
	public function publish_category_by_id($idd){
		$this->db->set('cat_status', 1);
		$this->db->where('id', $idd);
		$this->db->update('product_cat_tbl');
	}


	// delete category
	public function delete_category_by_id($d_id){
		$this->db->where('id', $d_id);
		$this->db->delete('product_cat_tbl');
	}

	/**
	* all active category
	*
	*/
	public function select_all_active_category(){
		$this->db->select('*');
		$this->db->from('product_cat_tbl');
		$this->db->where('cat_status', 1);
		$query_result = $this->db->get();
		$result = $query_result->result();

		return $result;
	}

	/***************************************************
	****************************************************
	****************************************************
	* Brand Section
	*
	****************************************************
	****************************************************
	*/
	public function save_brands_info($data){
		$this->db->insert('product_brands_tbl', $data);
	}


	// sending info to manage_brands.php
	public function select_all_brands(){
		$this->db->select('*');
		$this->db->from('product_brands_tbl');
		$requery_result = $this->db->get();
		$result = $requery_result->result();

		return $result;

	}

	// edit brand info
	public function edit_brand_info_by_id($b_id){
		$this->db->select('*');
		$this->db->from('product_brands_tbl');
		$this->db->where('id', $b_id);

		$requery_result = $this->db->get();
		$result = $requery_result->row();

		return $result;
	}

	/**
	*
	* update brands
	*/
	public function update_brands_by_id($data, $id){
		$this->db->where('id', $id);
		$this->db->update('product_brands_tbl', $data);
	}


	/**
	* unpublish or deactivate brands
	*
	*/
	public function unpuhlish_brand_status_by_id($p_id){
		$this->db->set('brand_status', 0);
		$this->db->where('id', $p_id);
		$this->db->update('product_brands_tbl');
	}

	// publish brand
	public function publish_brand_status_by_id($p_idd){
		$this->db->set('brand_status', 1);
		$this->db->where('id', $p_idd);
		$this->db->update('product_brands_tbl');
	}


	// delete brand
	public function delete_product_by_id($p_iddd){
		$this->db->where('id', $p_iddd);
		$this->db->delete('product_brands_tbl');
	}

	/**
	*
	*
	*/
	public function select_all_active_brands(){
		$this->db->select('*');
		$this->db->from('product_brands_tbl');
		$query_result = $this->db->get();
		$result = $query_result->result();

		return $result;
	}

}

