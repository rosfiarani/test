<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Controller {
  function __construct(){
		parent::__construct();		
		$this->load->model('M_cart');
 
	}
 
	function index(){
		$username = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->where('username',$username);
		$res = $this->db->get('mycart')->last_row();
		$idCart = $res->idCart;
		$info['productdata'] = $this->M_cart->getAllData($idCart);
			$this->load->view('v_cart',$info);
		// var_dump($info['productdata']);
	}
}