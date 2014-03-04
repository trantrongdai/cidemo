<?php
/*
 * @author : Thái Thanh Phong
 * @phone : 0933833174
 */
class Home extends CI_Controller{
    //put your code here

    public function  __construct() {
        parent::__construct();
        $this->load->helper("url");
        
        $this->load->library("my_layout"); // Sử dụng thư viện layout
        $this->my_layout->setLayout("layout/frontend"); // load file layout chính (view/layout/frontend.php)
    }

    // Controller mặc định cho trang chủ
    public function index(){
        $data['title'] = "Trang chủ";
        $data['data'] = "Dữ liệu trang home";
        
        $this->my_layout->view("frontend/home",$data);
    }

    
   public function about(){
        $data['title'] = "Giới thiệu";
        $this->my_layout->view("frontend/about",$data);
    }
    
    
    public function services(){
        $data['title'] = "Dịch vụ";
        $this->my_layout->view("frontend/services",$data);
    }

    
    public function support(){
        $data['title'] = "Hổ trợ";
        $data['data'] = "Mọi thắc mắc xin về bài viết xin liên hệ qua số điện thoại 0933833174";
        $this->my_layout->view("frontend/support",$data);
    }

    
    public function contact(){
        $data['title'] = "Liên hệ";
        $this->my_layout->view("frontend/contact",$data);
    }
}
?>
