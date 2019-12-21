<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_detail extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('M_product_detail');
	}
 
	function index(){
		$info['productdata'] = $this->M_product_detail->getData($_GET['idBarang']);
		$t = $_GET['idBarang'];
		//var_dump($t);
		// echo $_GET['idBarang'];
		// var_dump($info['productdata']);
		$this->load->view('v_product-detail',$info);
	}
 
	function add_to_cart_just_1(){
		$id = $_GET['idBarang'];
		$jumlah = $this->input->post('jumlah');
		$this->M_product_detail->add_to_cart($idBarang,$jumlah);
		// alert pop up, cart berhasil ditambah
	}
}
?>