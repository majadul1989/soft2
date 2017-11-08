<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
//        $this->load->model('contact_model', 'contact');
        $this->load->model('category');
    }

    public function index()
    {
        $data['result'] = $this->category->showCate();
        $this->load->view('dashboard/branches', $data);
    }
}