<?php
class Mu extends CI_Model{
	public $_table;
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function menus(){
		
		$menu['left']=$this->db->get('cate')->result_array();
		
		$menu['action']=array('add','view');
		
		$menu['controller']=array('Edit','Logout');
		return $menu;
	}
	
}