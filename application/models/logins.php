<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Logins extends CI_Model {

        public function login_database($data){
                $condition = "Email =" . "'" . $data['email'] . "' AND " . "Password =" . "'" . $data['password'] . "'";
                $this->db->select('*');
                $this->db->from('tbl_cpanel_user');
                $this->db->where($condition);
                $this->db->limit(1);
                $result = $this->db->get();

        if($result->num_rows() > 0){
                return true;

        }else{
                return false;
        }
        }

        // Read data from database to show data in admin page
        public function read_user_information($email) {

        $condition = "Email =" . "'" . $email . "'";
        $this->db->select('*');
        $this->db->from('tbl_cpanel_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
        return $query->result();
        } else {
        return false;
        }
        }
 }
 ?>