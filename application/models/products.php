<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Model
{

    public function productData()
    {
//      $condition = "Email =" . "'" . $email . "'";
        $this->db->select('BarCode');
        $this->db->from('products');
        $this->db->order_by('BarCode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}