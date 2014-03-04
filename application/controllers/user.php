<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->Model("Muser");
		$data=$this->Muser->listall();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	public function insertdb(){
		$this->load->database();
		$data=array(
			"username"=>"hanamtoi",
			"password"=>"123",
			"level"=>"2");
		$this->db->insert("users",$data);
	}
	public function updatedb(){
		$this->load->database();
		$data=array(
			"username"=>"hatay",
			"password"=>"321",
			"level"=>"1");
		$this->db->where("id","5");
		$this->db->update("users",$data);
	}
	public function deletedb(){
		$this->load->database();
		$data=array(
			"username"=>"hatay",
			"password"=>"321",
			"level"=>"1");
		$this->db->where("id","11");
		$this->db->update("users",$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */