<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class category extends CI_Model {


    public function showCate(){
        $this->db->select('CategoryId, CategoryName');
        $this->db->from('category');
        $result = $this->db->get();
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    } //change

}