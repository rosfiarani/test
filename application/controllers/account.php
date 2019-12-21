<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {
  function __construct(){
		parent::__construct();		
		$this->load->model('M_account');
		$this->load->model('M_cart');
 
	}
 
	function index(){
		$tempTransaksi = $this->M_account->getTransaksi($this->session->userdata('username'));
		if (empty($tempTransaksi)){
			$dataTransaksi = array('idTransaksi' => "BELUM MELAKUKAN TRANSAKSI",
									'total' => 0);
		}else{
			$dataTransaksi = array('idTransaksi' => end($tempTransaksi)->idTransaksi,'total' => end($tempTransaksi)->totalBayar );
			
		}
		
		$username = $this->session->userdata('username');
		//var_dump($username);
		$data = $this->M_account->getAccount($this->session->userdata('username'));
		//var_dump($data);
		//var_dump($tempTransaksi);
		$this->session->set_userdata('all_data',$data);
		$this->session->set_userdata('dataTransaksi',$dataTransaksi);
		$this->load->view('v_account');
	}

	function checkout(){
		$username = $this->session->userdata('username');
		$idCart = $this->M_cart->getIDCart($username);
		$data = $_GET['totHarga'];
		$totalharga = (int)$data;
		$this->M_account->addTransaksi($idCart,$totalharga);
		$username = $this->session->userdata('username');
		$dataUser = $this->M_account->getAccount($this->session->userdata('username'));
		$this->M_account->addNewCart($username);
		$tempTransaksi = $this->M_account->getTransaksi($this->session->userdata('username'));
		//var_dump($dataUser);
		//var_dump($tempTransaksi);
		if (empty($tempTransaksi)){
			$dataTransaksi = array('idTransaksi' => "BELUM MELAKUKAN TRANSAKSI",
									'total' => 0);
		}else{
			//var_dump(end(($tempTransaksi)));
			$dataTransaksi = array('idTransaksi' => end($tempTransaksi)->idTransaksi,'total' => end($tempTransaksi)->totalBayar );
			
		}
		$this->session->set_userdata('all_data',$dataUser);
		$this->session->set_userdata('dataTransaksi',$dataTransaksi);
		$this->load->view('v_account');
	}

	function pembayaran(){
		$username = $this->session->userdata('username');
		$tanggalPembayaran = $this->input->post('tanggalPembayaran');
		$idTransaksi = $this->input->post('idTransaksi');
		$this->M_account->addPemesanan($idTransaksi,$tanggalPembayaran);
		
		redirect('account');
		//echo $tanggalPembayaran;
		//var_dump($tanggalPembayaran);
	}

	function editAkun(){
		$username = $this->session->userdata('username');
		$data = array();
		if ($this->input->post('nama') != '') {
			$data['namaPembeli'] = $this->input->post('nama');
		}
		if ($this->input->post('alamat') != '') {
			array_push($data, 'alamat', $this->input->post('alamat'));
		}
		if ($this->input->post('email') != '') {
			array_push($data, 'email', $this->input->post('email'));
		}
		if ($this->input->post('no_telp') != '') {
			array_push($data, 'noTelp', $this->input->post('no_telp'));
		}
		// $data = array(
		// 	'username' => $username,
		// 	'namaPembeli' => $this->input->post('nama'),
		// 	'email' => $this->input->post('email'),
		// 	'noTelp' => $this->input->post('no_telp'),
		// 	'alamat' => $this->input->post('alamat')
		// );
		$this->M_account->editAkun($data, $username);
		//$this->load->view('v_account');
        redirect("account/index");
	}

	function editPassword(){
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$passwordinput = $this->input->post('currpassword');
		$newpassword = $this->input->post('newpassword');
		$passwordconfirm = $this->input->post('confirmpassword');
		if($password == $passwordinput){
			if($newpassword == $passwordconfirm){
				$data = array(
					'password' => $this->input->post('newpassword')
				);
			$this->M_account->editPassword($data, $username);
			redirect("account/index");
			}else{$message = "Password baru dengan confirmation password tidak sama";
					echo "<script type='text/javascript'>
				   			alert('$message');
				   		  </script>";
					$this->load->view('v_account');
			}
		}else{$message = "Password saat ini salah";
			echo "<script type='text/javascript'>
				   			alert('$message');
				   		  </script>";
			$this->load->view('v_account');

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect("login/index");
	}
}
?>