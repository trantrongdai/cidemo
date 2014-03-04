<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
	}
	public function index()
	{
		echo "<h1>Hello world! I'm Chu Dinh BKHN </h1>";
		$data['title']="Hello 123";
		$data['account']=array(
			"username"=>"admin",
			"password"=>"12345",
			"level"=>"2",
			);
		$this->load->view('hello_view',$data);

	}
	public function hocphp(){
		echo "<h3>Ha Nam la que huong toi</h3>";
	}
	public function xin_chao(){
		$this->load->view('hello');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */