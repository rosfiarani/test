<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {
  function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
		$this->load->model('M_cart');
 
	}
 
	function index(){
		$username = $this->session->userdata('username');
		$idCart = $this->M_cart->getIDCart($username);
		if($idCart != 0){
			$info['productdata'] = $this->M_cart->getAllData($idCart);
			$info['view'] = True;
			$this->load->view('v_homepage',$info);
		}else{
			$info['view'] = False;
			$this->load->view('v_homepage',$info);
		}
	}
}
?>