<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePassword extends CI_Controller {

	public function index(){
		$this->load->view('dashboard/changePassword');
	}



	public function changeUserPassword(){
		// print_r($_POST);
		$this->form_validation->set_rules('oldPassword', 'Old Password', 'trim|xss_clean|required');
		$this->form_validation->set_rules('newPassword', 'New Password', 'trim|xss_clean|min_length[8]|required');
		$this->form_validation->set_rules('cNewPassword', 'Confirm Nnw Password', 'trim|xss_clean|matches[newPassword]|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('dashboard/changePassword');
		}else{
			$this->load->model('changePasswordModel');
			$oldPassword = $this->input->post('oldPassword');
			// $userId      = ($this->session->userdata['logged_in']['UserId']);
			$sessionID  = ($this->session->userdata['logged_in']['UserId']);
			$password = sha1($oldPassword);
			$data = array(
			'password' => $password,
			'sessionID' => $sessionID
			);
			$result = $this->changePasswordModel->change($data);
			if ($result == TRUE) {
				// echo "Change Password2";
				$sessionID  = ($this->session->userdata['logged_in']['UserId']); // Get user by session from login user;
				$userId = $result[0]->UserId; // get user id from data table by password using;
				//print_r($result); //Print all data in one user by password 
				if ($userId == $sessionID) {
					$passChange = $this->input->post('newPassword');
					$password = sha1($passChange);
					$this->db->set('Password', $password);
					$this->db->where('UserId', $userId);
					$changeSuccess = $this->db->update('tbl_cpanel_user'); 
					if ($changeSuccess == TRUE) {
						$data = array(
						'success' => 'Changed Successfully !'
						);
						$this->load->view('dashboard/changePassword', $data);
					}
				}else{
					$data = array(
					'error_message' => 'Password Not Match in your Current Password'
					);
					$this->load->view('dashboard/changePassword', $data);
				}

			} // check user Valid or Invalid
			else {
			$data = array(
			'error_message' => 'Password Not Match in your current Password'
			);
			$this->load->view('dashboard/changePassword', $data);
			}
		} // validation
	}


}
?>