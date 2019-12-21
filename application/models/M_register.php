<?php 

class M_register extends CI_Model{	

	function registerUser($username,$password){	
		$data = array(
			'username' => $username,
			'password' => $password,
			'isPembeli' => 1
		);	
		$this->db->insert('user', $data);
	}	

	function registerPembeli($username,$namaPembeli,$alamat,$email,$no_telpon){	
		$data = array(
			'username' => $username,
			'namaPembeli' => $namaPembeli,
			'alamat' => $alamat,
			'email' => $email,
			'noTelp' => $no_telpon,
		);	
		$this->db->insert('pembeli', $data);
	}

	function registerMyCart($username){
		$this->db->select('*');
		$count = $this->db->get('mycart')->num_rows();
		$idCart = $count+1;

		$data = array(
			'idCart' => $idCart,
			'username' => $username,
			'totalBayar' => 0,
			'statusPembelian' => 0
		);
		$this->db->insert('mycart',$data);
	}

	function cek_register($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}
