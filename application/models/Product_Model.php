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
	*
	*
	*/
	public function update_category_by_id($data, $cat_id){
		$this->db->where('id', $cat_id);
		$this->db->update('product_cat_tbl', $data);
	}


	/**
	*
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

}

