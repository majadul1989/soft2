<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class ResetPassword extends CI_Model {


	public function password($data){
			// $condition = "UserId =" . "'" . $data['sessionID'] . "' AND " . "Password =" . "'" . $data['password'] . "'";
	        $condition = " 	Email=" . "'" . $data['forgetMail'] . "'";
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

public function getPassword($forgetData){
			$condition = "UserName =" . "'" . $forgetData['userName'] . "' AND " . "EmailToken =" . "'" . $forgetData['getToken'] . "'";
	        // $condition = " 	Email=" . "'" . $data['forgetMail'] . "'";
	        $this->db->select('*');
	        $this->db->from('tbl_cpanel_user');
	        $this->db->where($condition);
	        $this->db->limit(1);
	        $getResult = $this->db->get();

			if($getResult->num_rows() > 0){
			        return $getResult->result();

			}else{
			        return false;
			}
}

}