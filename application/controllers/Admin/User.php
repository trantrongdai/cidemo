<?php
class User extends CI_Controller{

	public $_data;
	public $_class;

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
           $this->load->library('table'); 
        //$this->load->library('session'); 
		$this->load->library("my_layout"); // Nạp thư viện layout
        $this->my_layout->setLayout("Admin/admin"); // load file layout chính )
		$this->load->Model('mu');
		$this->load->Model('muser');
		$this->_data['menu']=$this->mu->menus();
		$this->_data['contr']=__CLASS__;
	}
	
	public function index(){
		$this->_data['info']='hay qua';
		$this->load->view("Admin/layout",$this->_data);
	}

	public  function add()
    {
        
        $this->form_validation->set_rules("username","username","required|max_length[25]|callback_checkNew");
        $this->form_validation->set_rules("password","password","required|matches[repassword]");
		$this->form_validation->set_rules("fullname","fullname","required|min_length[5]");
      
        $data['error'] = "";
        
        if($this->form_validation->run()==FALSE){
            
            $this->load->view("Admin/User/add",array("error"=>""));
        }
        else
        {
               
                $add = array(
                        
                        "username"  => $this->input->post("username"),                        
                        "password"  => md5($this->input->post("password")),
						"fullname" =>$this->input->post("fullname"),
						"gender" =>$this->input->post("gender"),
						"country" =>$this->input->post("country"),
						"email" =>$this->input->post("email"),
						"tel" =>$this->input->post("tel"),
						"active" =>$this->input->post("active"),
						"level" =>$this->input->post("level"),
						"birthday" =>$this->input->post("birthday")
                                    
                );
                
                //--- 
                $message = "";
                $mail = array();

                if($this->muser->addUser($add)){
         
                    $message  = "Please follow this link to active your acount <br/>".               
                    $message .= "UserName : ".$this->input->post("username");
                    $message .= "Password : ".$this->input->post("password");                   
                    $message .= "FullName : ".$this->input->post("fullname");
                    $message .= "Email : ".$this->input->post("email");

                    redirect(base_url()."index.php/Admin/User/view"); 
                }
                
                $this->load->view("Admin/User/add",$data);
        }

    }
	
	public function view(){
	
		$this->muser->getalldata();
        $max = $this->muser->num_rows();
        $min = 4;
        echo $max;
        $data['num_rows'] = $max;
        //--- Paging

        if($max !=0 ){
            $this->load->library('pagination');
            $config['base_url'] = base_url()."index.php/Admin/User/view";
            $config['total_rows'] = $max;
            $config['per_page'] = $min;
            $config['num_link'] = 2; 
            $config['uri_segment'] = 4;
            $this->pagination->initialize($config);
            $data['link'] = $this->pagination->create_links();
            $data['users'] = $this->muser->getalldata($min,$this->uri->segment($config['uri_segment']));
            
            $this->load->view("/Admin/User/view",$data);
             echo 'da chay toi day';
        
        }else{

            $data['report'] = "Khong co du lieu de hien thi";
            $this->load->view("Admin/layout",$data);
        }          
		
	}
	public function edit(){
        $username = $this->uri->segment(4);
        $data['info'] = $this->muser->getInfo($username);
        echo $username;
        if(!is_numeric($username) && $data['info']!=NULL)
        {
            
            if(isset($_POST['ok']))
            {   
                $this->form_validation->set_rules("username","username","required|max_length[25]|callback_checkUser");
				$this->form_validation->set_rules("password","password","required|matches[repassword]");
				$this->form_validation->set_rules("fullname","fullname","required|min_length[5]");
				$this->form_validation->set_rules("email","email","required|valid_email|callback_checkEmail");
        
                $data['error'] = "";
                if($this->form_validation->run()==FALSE){
   
                    $this->load->view("Admin/User/edit",$data);
                
                }else{
                    
                      $update = array(
                                    "username"  => $this->input->post("username"),                        
                                     "password"  =>$this->input->post("password"),
                                    "fullname" =>$this->input->post("fullname"),
                                    "gender" =>$this->input->post("gender"),
                                    "country" =>$this->input->post("country"),
                                    "email" =>$this->input->post("email"),
                                    "tel" =>$this->input->post("tel"),
                                    "active" =>$this->input->post("active"),
                                    "level" =>$this->input->post("level"),
                                    "birthday" =>$this->input->post("birthday")
                                 );
                      if($this->input->post("password")!="")
                      {
                         $update['password'] = md5($this->input->post("password"));
                      }
                      
                      $this->muser->updateUser($update,$username);
                      redirect(base_url()."index.php/Admin/User/view"); 
                }
            }
            else
            {
                $this->load->view("Admin/User/edit",$data);   
            }
            
        }
        else
        {
            
            $data['home'] = "Đường dẫn không hợp lệ";
            $this->load->view("Admin/User/edit",$data);
        }
    }
    // xóa user
	public function delete(){
		
        $username = $this->uri->segment(4);
        
        if(!is_numeric($username)){
            
            $this->muser->deleteUser($username);
            redirect(base_url()."index.php/Admin/User/view");
        
        }else{
            
            $data['report'] = "Duong dan khong hop le";
            $this->my_layout->view("Admin/User/view",$data);
        }
    
	}
	
	
	//--- Kiểm tra user hợp lệ
    public function checkUser($username)
    {
        $id = $this->uri->segment(5);
        echo $id;
        if($this->muser->getUser($username,$id)==TRUE){
            return TRUE;
        }
        else{
            $this->form_validation->set_message("checkUser","Your username has been register, please try again");
            return FALSE;
       }
    }




}