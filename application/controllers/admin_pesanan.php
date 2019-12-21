<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_pesanan extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));		
		$this->load->model('M_Admin_Pesanan');
	}
 
	function index(){
		$info['pesanandata'] = $this->M_Admin_Pesanan->getAllData();
		$this->load->view('v_admin-pemesanan',$info);
	}

	function viewPesanan($id=null){
		$info['d'] = $this->M_Admin_Pesanan->getData($_GET['idTransaksi']);
		$this->load->view('v_admin-viewpesanan',$info);
	}
	function ubahStatus($id=null){
		if (!isset($id)){
        	redirect('admin_pesanan');
        }else {
			$data = array(
				'statusPembayaran' => 1
			);
			$this->M_Admin_Pesanan->ubahStatusPembayaran($id,$data);
		}
	}
}
?>