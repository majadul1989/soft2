<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}


// Logout from admin page
public function logout() {
// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['success_logout'] = 'Successfully Logout';
$this->load->view('login', $data);
}

}



