<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index(){
		$this->load->view('dashboard/dashboard');

        //load library
        $this->load->library('zend');
        //load in folder Zend
        $this->zend->load('Zend/Barcode');
        //generate barcode
        $barCodeGenerate = Zend_Barcode::render('code128', 'image', array('text'=>'sdfgsdf'), array());

	}
    public function userLogin(){
        $this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        }else{
            $email = $this->input->post('email');
            $password2 = $this->input->post('password');
            $password = sha1($password2);
            $data = array(
                'email' => $email,
                'password' => $password
            );
            $this->load->model('logins');
            $result = $this->logins->login_database($data);
            if ($result == TRUE) {
                $email = $this->input->post('email');
                $result = $this->logins->read_user_information($email);
                if ($result != false) {
                    $session_data = array(
                        'UserId' => $result[0]->UserId,
                        'UserName' => $result[0]->UserName,
                        'RowStatus' => $result[0]->RowStatus,
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('dashboard/dashboard');
                } // Read user true or FALSE

            } // check user Valid or Invalid
            else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('login', $data);
            }
        } // validation
    } //userLogin

}
?>