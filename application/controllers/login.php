<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("user",$where)->num_rows();
		var_dump($cek);
		$sql = "SELECT `username`,`isPembeli`,`isAdmin` FROM `user` WHERE `username` = '$username'";
		$sql2 = "SELECT `username`,`namaPembeli`,`alamat`,`email`,`noTelp` FROM `pembeli` WHERE `username` = '$username'";
		$query = $this->db->query($sql);
		$query2 = $this->db->query($sql2);
		$row = $query->row();
		$row2 = $query2->row();
		if(isset($row)){
			$username = $row->username;
		}
		if($cek > 0){
			$data_session = array(
				'username' => $username,
				'password' => $password,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			if($row->isPembeli == 1){
				redirect("homepage/index");
			}
			if($row->isAdmin == 1){
				redirect(base_url("admin"));
			}
		}else{
			$message = "Username atau Password salah!";
			echo "<script type='text/javascript'>
				   			alert('$message');
				   		  </script>";
			$this->load->view('v_login');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>