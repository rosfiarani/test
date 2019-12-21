<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
  function __construct(){
		parent::__construct();		
		$this->load->model('M_product');
 
	}
 
	function index(){
		// $username = $this->session->userdata('username');
		// $data = $this->M_account->getAccount($this->session->userdata('username'));
		// $this->session->set_userdata('all_data',$data);
		$info['productdata'] = $this->M_product->getAllData();
		// var_dump($info['productdata']);
		$info['all'] = True;
		$this->load->view('v_product',$info);

	}

	function filter($id){
		$info1['productdata'] = $this->M_product->getKategori($id);
		$info1['all'] = False;
		$this->load->view('v_product',$info1);	
	}

	function add_to_cart_just_1(){
		$username = $this->session->userdata('username');
		$idBarang = $_GET['idBarang'];
		$test = $this->M_product->add_to_cart_just1($username,$idBarang);
		// var_dump($username);
		// var_dump($idBarang);
		var_dump($test);
		redirect("product/index");
	}
}