<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddUser extends CI_Controller {

//	function __construct(){
//		parent::__construct();
//		$this->load->library('form_validation');
//	}

	public function index()
	{
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

		$this->load->view('dashboard/header');
        $this->load->view('dashboard/menubar');
        $this->load->view('user/new', $data);
		$this->load->view('dashboard/footer');
	}

	public function refresh_captcha(){
	$this->load->helper('captcha');
	$vals = array(
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
			// White background and border, black text and red grid
			'colors'  => array(
			        'background' => array(255, 255, 255),
			        'border' => array(255, 0, 0),
			        'text' => array(0, 0, 0),
			       'grid' => array(255, 40, 40)
			)
	);
	$cap = create_captcha($vals);
	$this->session->set_userdata('captchaWord', $cap['word']);
	echo  $cap['image'];
	}

	public function newUser(){
		$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required|valid_email|is_unique[tbl_cpanel_user.Email]');
		$this->form_validation->set_rules(
		'userName', 'Username',
		        'trim|xss_clean|required|is_unique[tbl_cpanel_user.UserName]',
		        array(
		                'required'      => 'You have not provided %s.',
		                'is_unique'     => 'This %s already exists.'
		        )
		);
		$this->form_validation->set_rules('nid', 'NID', 'trim|xss_clean|required|is_unique[tbl_cpanel_user.NID]');
		$this->form_validation->set_rules('dateOfBirth', 'Date Of Birth', 'required');
		$this->form_validation->set_rules('phone', 'Cell Phone No.', 'trim|xss_clean|required|is_unique[tbl_cpanel_user. 	CellPhoneNumber]');
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required|min_length[8]');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|xss_clean|required|matches[password]');

		$captchaWord = $_SESSION['captchaWord']; // get captcha from $_SESSION
		$captcha =  $this->input->post('captcha'); // Get Input Value by Variable
		
		$this->form_validation->set_rules('captcha', 'Captcha', 'required');
		$this->form_validation->set_rules('condition[]','Condition', 'required');


		if ($this->form_validation->run() == FALSE || $captchaWord !== $captcha ) {
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

			$this->load->view('dashboard/header');
			$this->load->view('dashboard/menubar');
			$this->load->view('user/new', $data);
			$this->load->view('dashboard/footer');
			
		}else{
			// echo '<pre>';
			// print_r($_POST);
			// print_r($_SESSION);
			$email =  $this->input->post('email'); // Get Input Value by Variable
			$userName =  $this->input->post('userName'); // Get Input Value by Variable
			$nid =  $this->input->post('nid'); // Get Input Value by Variable
			$dateOfBirth =  $this->input->post('dateOfBirth'); // Get Input Value by Variable
			$phone =  $this->input->post('phone'); // Get Input Value by Variable
			$password2 =  $this->input->post('password'); // Get Input Value by Variable
			$possword = sha1($password2); //Password converted by sha1(str)

			$t = new DateTime();
			$t->setTimezone(new DateTimeZone( 'Asia/Dhaka' ));
			$date = $t->format(' Y-m-d G:i:s' ); //2017-12-31 12:59:59 PM
			$EmailToken = sha1($email.$userName.$possword); // verify mail token
			$SMSToken  = rand(00000000, 99999999); // SMS Random code variable for verify
			$UserType = 'user';
			$status = 'Active';
			$UserId = '';
			$data = array(
		        'Email'      		=> $email,
		        'UserName'     		=> $userName,
		        'NID'   			=> $nid,
		        'DOB'    			=> $dateOfBirth,
		        'CellPhoneNumber' 	=> $phone,
		        'Password'    		=> $possword,
		        'EmailToken'    	=> $EmailToken,
		        'SMSToken'    		=> $SMSToken,
		        'UserType'    		=> $UserType,
		        'RowDescription'    => 'RowDescription',
		        'RowStatus'    		=> $status,
		        'AddedBy'    		=> $UserId,
		        'AddedDate'    		=> $date,
		        'UpdatedBy'    		=> $UserId,
		        'UpdatedDate'    	=> $date,
			        
			);
			$str = $this->db->insert('tbl_cpanel_user', $data);
			if ($str == true) {
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('user/new', $data);
                $this->load->view('dashboard/footer');
			}else{
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('user/new', $data);
                $this->load->view('dashboard/footer');
			}
		}//end of error check conditions
	}
}