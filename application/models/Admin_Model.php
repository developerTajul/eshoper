<?php 

Class Admin_Model extends CI_Model{

	public function login_check_info($userName, $passWord){
		$this->db->select('*');
		$this->db->from('admin_info');
		$this->db->where('userName', $userName);
		$this->db->where('passWord', $passWord);
		$query_result = $this->db->get();
		$result = $query_result->row();

		return $result;
	}
}