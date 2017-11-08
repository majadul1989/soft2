<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class changePasswordModel extends CI_Model {


	public function change($data){
			$condition = "UserId =" . "'" . $data['sessionID'] . "' AND " . "Password =" . "'" . $data['password'] . "'";
	        // $condition = "Password =" . "'" . $data['password'] . "'";
	        $this->db->select('*');
	        $this->db->from('tbl_cpanel_user');
	        $this->db->where($condition);
	        $this->db->limit(1);
	        $result = $this->db->get();

	if($result->num_rows() > 0){
	        return $result->result();

	}else{
	        return false;
	}
	} //change

}