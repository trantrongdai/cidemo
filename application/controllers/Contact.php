<?php
/*
 * @author : Thái Thanh Phong
 * @phone : 0933833174
 */
class Contact extends CI_Controller{
    //put your code here

    public function  __construct() {
        parent::__construct();
        $this->load->helper("url");
        
        $this->load->library("my_layout"); 
        $this->my_layout->setLayout("layout/contact");// Sử dụng thư viện layoutlayout chính (view/layout/frontend.php)
    }

    // Controller mặc định cho trang chủ
    
    public function index(){
        $data['title'] = "Góp ý";
        $this->my_layout->view("frontend/contact");
    }
}
?>
