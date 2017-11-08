<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddNew extends CI_Controller {

    public function index(){
        $this->load->model('products');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/menubar');
        $this->load->view('product/addNew');
        $this->load->view('dashboard/footer');
    }

    public function addNewPorduct()
    {
        $this->form_validation->set_rules(
            'item_name', 'Item Name',
            'trim|xss_clean|required|is_unique[products.ProductName]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )
        );
        $this->form_validation->set_rules('type', 'Type','trim|xss_clean|required');
        $this->form_validation->set_rules('gourp', 'Gourp','trim|xss_clean|required');
        $this->form_validation->set_rules('price', 'Item Price','trim|xss_clean|required|numeric');
        $this->form_validation->set_rules('description', 'description','trim|xss_clean');
//        $this->form_validation->set_rules('barcode', 'Barcode','trim|xss_clean|numeric|required');

        if ($this->form_validation->run() == FALSE) { // Check Valideation False
                $this->load->view('dashboard/header');
                $this->load->view('dashboard/menubar');
                $this->load->view('product/addNew');
                $this->load->view('dashboard/footer');
        }else{
            $group = $this->input->post('gourp');
            $type = $this->input->post('type');
            $item_name2 = strtolower($this->input->post('item_name')); //string convert to lower case
            $item_name = ucwords($item_name2); //The ucwords() function converts the first character of each word in a string to uppercase
            $price = $this->input->post('price');
            $description2 = strtolower($this->input->post('description')); //string convert to lower case
            $description = ucwords($description2); //The ucwords() function converts the first character of each word in a string to uppercase
//            $barcode = $this->input->post('barcode'); //The ucwords() function converts the first character of each word in a string to uppercase
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('productImages'))
            {
                $file_name =  "";
            }
            else
            {
              $file_name =  $this->upload->data('file_name');
            }
            $t = new DateTime();
            $t->setTimezone(new DateTimeZone( 'Asia/Dhaka' ));
            $date = $t->format(' Y-m-d G:i:s' ); //2017-12-31 12:59:59 PM
            $sessionID  = ($this->session->userdata['logged_in']['UserId']);
            $status = 'Active';
//            $data = array(
//                'ProductId'=>$id,
//                'ProductName'=>$item_name,
//                'ProductBarCode'=>$barcode,
//                'ProductUnitId'=>$type,
//                'ProductGroupId'=>$group,
//                'ProductPrice'=>$price,
//                'ProductImage'=>$file_name,
//                'RowDescription'=>$description,
//                'RowStatus'=>$status,
//                'AddedBy'=>$sessionID,
//                'AddedDate'=>$date,
//                'UpdatedBy'=>$sessionID,
//                'UpdatedDate'=>$date
//            );
            $this->load->model('products');
            $barCode = $this->products->productData(); // Veriable to for barcode;
//            print_r($barCode[0]->BarCode);
            $barcode = $barCode[0]->BarCode+1;
            $insert = $this->db->query("call productPRO('$barcode','$item_name','$type','$group','$price','$file_name','$description','$status','$sessionID','$date','$sessionID','$date')");
            if ($insert == TRUE){
                $refresh = 'Product Added';
                redirect('/product/addNew', $refresh);
            }
        } // Check Valideation True


    } // add new product

} // Class
?>
