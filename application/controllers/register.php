<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('M_register');
 
	}
 
	function index(){
		$this->load->view('v_register');
	}
 
	function aksi_register(){
		$username = $this->input->post('username');
		$namaPembeli = $this->input->post('name');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$no_telpon = $this->input->post('no_telpon');
		//$tgl = $this->input->post('tanggallahir');
		$where = array(
			'username' => $username,
			);
		$cek = $this->M_register->cek_register("user",$where)->num_rows();
		$sql = "SELECT `username` FROM `user` WHERE `username` = '$username'";
		$query = $this->db->query($sql);
		$row = $query->row();
		$cektgl = date('Y-m-d');
		/*if ($tgl > $cektgl){
			$message = "TANGGAL LAHIR TIDAK BOLEH MELEBIHI";
   			echo "<script type='text/javascript'>
          alert('$message');
           </script>";
           $this->load->view('v_register');
		}else*/ if($cek == 0){
			$this->M_register->registerUser($username,$password);
			$this->M_register->registerPembeli($username,$namaPembeli,$alamat,$email,$no_telpon);
			$this->M_register->registerMyCart($username);
			redirect(site_url("login"));	
		}
		else{
			$message = "Username Taken!";
			echo "<script type='text/javascript'>
				   			alert('$message');
				   		  </script>";
			$this->load->view('v_register');
		}	
	}
}
?>