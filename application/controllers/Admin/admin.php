<?php 
	/**
	* 
	*/
	class Admin extends CI_Controller
	{
		
		public function __construct()
		{
		parent::__construct();
        $this->load->helper("url");
     //   $this->load->library('session'); 
		$this->load->library("my_layout"); // Nạp thư viện layout
		$this->load->Model("mu");
		$this->_data['menu']=$this->mu->menus();
		$this->_data['contr']=__CLASS__;

		}

		public function index(){
		$this->_data['title']="This is View Action";
		$this->_data['message']="This is view <i>user</i> action";
		$this->_data['show']="Admin/User/view";
		$this->load->view("Admin/layout",$this->_data);
		}
	}
 ?>