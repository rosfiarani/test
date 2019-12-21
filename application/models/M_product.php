<?php 

class M_product extends CI_Model{	

	// function add_to_cart($idBarang,$jumlah){	
	// 	$data = array(
	// 		'idBarang' => $idBarang,
	// 		'jumlah' => $jumlah,
	// 	);	
	// 	$this->db->insert('detailmycart', $data);
	// }	

	function getKategori($kategori){
		$this->db->from('barang');
		$this->db->where('kategori',$kategori);
	    return $this->db->get()->result();
	}

	function getAllData(){
		$this->db->from('barang');
	    return $this->db->get()->result();
	}

	function add_to_cart_just1($username,$idBarang){	
		$array = array('username' => $username, 'statusPembelian' => 0);
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('statusPembelian',0);
		$res = $this->db->get('mycart')->last_row();
		$idCart = $res->idCart;
		$this->db->select('harga');
		$this->db->from('barang');
		$this->db->where('idBarang',$idBarang);
		$totalHarga = $this->db->get()->result();
		$int = (int)$totalHarga[0]->harga;
		$totalsebelum = (int)$res->totalBayar;
		$totalBayar = $totalsebelum  + $int;

		$test = array(
			'totalBayar' => $totalBayar
		);

		$this->db->where('idCart', $idCart);
		$this->db->update('mycart', $test);
		$data = array(
			'idCart' => $idCart,
			'idBarang' => $idBarang,
			'jumlah' => 1,
		);	
		$this->db->insert('detailmycart', $data);
		// return $idCart;
	}
}