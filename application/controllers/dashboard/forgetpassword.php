<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpassword extends CI_Controller {

	public function index(){
		$this->load->view('dashboard/Forgetpassword');
	}


	public function forget(){
		// print_r($_POST);
		$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required|valid_email');
		if ($this->form_validation->run() == FALSE ) {
			$this->load->view('dashboard/Forgetpassword');
		}else{
			$this->load->model('ResetPassword');
			$email =  $this->input->post('email'); // Get Input Value by Variable
			$data = array(
			'forgetMail' => $email
			);
			$result = $this->ResetPassword->password($data);
			if ($result == TRUE) {
				$dataEmail = $result[0]->Email;
				// print_r($result);
				// print_r($result[0]->Email);
				if ($dataEmail == $email) {
					// Mail functions
					// Always set content-type when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					// More headers
					$headers .= 'From: <noreplay@soft.com>' . "\r\n";
					$message = "Hi <b><i>".$result[0]->UserName."</i></b>\r\n";
					$message .= "<a href='".base_url()."dashboard/forgetpassword/resetpassword?userName=".$result[0]->UserName."&_token=".$result[0]->EmailToken."'>Click here to reset password !</a>";
					$subject = "Forget Password";

					$sendMile = mail($email,$subject,$message,$headers);
					if ($sendMile) {
						$data = array(
						'error_message' => 'Please check your maail and change your password <b><i>'.$email.'</i></b>'
						);
						$this->load->view('login', $data);
					}else{

					}//Mail send condition end
				}else{
					$data = array(
					'error_message' => 'Please  check the mail and try again  <b><i>'.$email.'</i></b> this email is not exits'
					);
					$this->load->view('dashboard/Forgetpassword', $data);
				}
			}else{
					$data = array(
					'error_message' => 'Please check the mail and try again <b><i>'.$email.'</i></b> this email is not exits'
					);
					$this->load->view('dashboard/Forgetpassword', $data);
				}
		}
	} // forget

	public function resetpassword(){
		$real =  $_GET['userName']; // Get data from url and validation in sql injection 
		$data['userName'] = stripslashes(trim($real)); //validation in sql injection 
		$realToken =  $_GET['_token'];// Get data from url and validation in sql injection 
		$data['getToken'] = stripslashes(trim($realToken));//validation in sql injection

			$this->load->helper('captcha');
			$vals = array(
			        // 'word'          => 'Random word',
			        'img_path'      => './captcha/',
			        'img_url'       => base_url().'captcha/',
			        'font_path'     => FCPATH.'./path/to/fonts/texb.ttf',
			        'img_width'     => 100,
			        'img_height'    => 50,
			        'expiration'    => 7200,
			        'word_length'   => 6,
			        'font_size'     => 30,
			        'img_id'        => 'Imageid',
			        'pool'          => '0123456789',
			        // 'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
			            

			        // White background and border, black text and red grid
			        'colors'  => array(
			                'background' => array(255, 255, 255),
			                'border' => array(255, 0, 0),
			                'text' => array(0, 0, 0),
			               'grid' => array(255, 40, 40)
			        )
			);

			$cap = create_captcha($vals);
			$data['captcha'] = $cap['image'];
			$data['word'] = $cap['word'];
			$this->session->set_userdata('captchaWord', $cap['word']);
			// $data['captcha'] = $cap; 

		$this->load->view('dashboard/recoveryPassword', $data);

		
	} // resetpassword

	public function savePassword(){
		// Input Data verify for sql injections
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required|min_length[8]');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|xss_clean|required|matches[password]');
		$captchaWord = $_SESSION['captchaWord']; // get captcha from $_SESSION
		$captcha =  $this->input->post('captcha'); // Get Input Value by Variable
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|xss_clean|required');
		$this->form_validation->set_rules('name','Not match', 'trim|xss_clean|required');
		$this->form_validation->set_rules('_Token','Not match', 'trim|xss_clean|required');
			// Error Handling here
		if ($this->form_validation->run() == FALSE AND $captchaWord == $captcha) {
			$data = array(
			'error_message' => 'Please Try Again !'
			);
			$this->load->view('dashboard/recoveryPassword', $data);
		}else{
			// Load Model
		$this->load->model('ResetPassword');
		$password2 =  $this->input->post('password');
		$password = sha1($password2);
		$name =  $this->input->post('name');
		$_Token =  $this->input->post('_Token');
		$forgetData = array(
		'userName' => $name, // set variable
		'getToken' => $_Token, // set variable
		);
		$result = $this->ResetPassword->getPassword($forgetData);

		if ($result == TRUE) {
			 $userId = $result[0]->UserId; // Get data from database
			 $UserName = $result[0]->UserName; // Get data from database
			 $email = $result[0]->Email; // Get data from database
			 $EmailToken = sha1($email.$UserName.$password);
			 // Update Functions 
			$this->db->set('Password', $password);
			$this->db->set('EmailToken ', $EmailToken);
			$this->db->where('UserId', $userId);
			$this->db->where('UserName ', $UserName);
			$changeSuccess = $this->db->update('tbl_cpanel_user');
			// check success or not
			if ($changeSuccess == TRUE) {
				$data['success_logout'] = 'Password Change Successfully';
				$this->load->view('login', $data);
			}else{
				$data = array(
				'error_message' => 'Please Try Again !'
				);
				$this->load->view('dashboard/recoveryPassword', $data);
			} // check Update success
			
			 
		}else{
				$data = array(
					'error_message' => 'Please check the mail and try again this link is not valid'
					);
					$this->load->view('dashboard/Forgetpassword', $data);
			} // check Update success
		}
	}

}