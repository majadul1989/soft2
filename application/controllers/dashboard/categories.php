<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function __construct(){
        parent::__construct();
//        $this->load->model('contact_model', 'contact');
        $this->load->model('category');
    }

    public function index()
    {
        $data['result'] = $this->category->showCate();
        $this->load->view('dashboard/category', $data);
    }

    public function store(){
//        print_r($_POST);
        $this->form_validation->set_rules('categoryName', 'Category', 'trim|xss_clean|required|is_unique[category.categoryName]');
        if($this->form_validation->run() == FALSE){
            $data['result'] = $this->category->showCate();
            $this->load->view('dashboard/category', $data);
        }else{
            $categoryName =  $this->input->post('categoryName'); // Get Input Value by Variable
            $t = new DateTime();
            $t->setTimezone(new DateTimeZone( 'Asia/Dhaka' ));
            $date = $t->format(' Y-m-d G:i:s' ); //2017-12-31 12:59:59 PM
            $status = 'Active';
            $id   = ($this->session->userdata['logged_in']['UserId']);

            $data = array(

                'CategoryName'    => $categoryName,
                'RowDescription'    => 'RowDescription',
                'RowStatus'    		=> $status,
                'AddedBy'    		=> $id,
                'AddedDate'    		=> $date,
                'UpdatedBy'    		=> $id,
                'UpdatedDate'    	=> $date,

            );
            $str = $this->db->insert('category', $data);
            if ($str == true) {
                $data['result'] = $this->category->showCate();
//                $data['result'] = $query->result();
                $data['add'] = 'Successfully Added';
                $this->load->view('dashboard/category', $data);
            }else{
                $data['result'] = $this->category->showCate();
                $this->load->view('dashboard/category', $data);
            }
        }
    }

}