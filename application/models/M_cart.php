<?php 

class M_cart extends CI_Model{

	function getAllData($id){
		$this->db->select('mycart.idCart,gambar1,namaBarang,harga,jumlah,totalBayar');
		$this->db->from('mycart');
		$this->db->join('detailmycart', 'detailmycart.idCart = mycart.idCart');
		$this->db->join('barang', 'detailmycart.idBarang = barang.idBarang');
		$this->db->where('mycart.idCart',$id);
		$this->db->where('mycart.statusPembelian',0);
	    return $this->db->get()->result();
	}

	function getIDCart($id){
		$this->db->select('idCart');
		$this->db->from('mycart');
		$this->db->where('username',$id);
		$this->db->where('statusPembelian',0);
	    $data = $this->db->get()->result();
	    $idCart = $data[0]->idCart;
	    return $idCart;
	}

	function getIDCartNew($id){
		$where = ['username' => $id, 'statusPembelian' => 0];
		$this->db->select('idCart');
		$this->db->from('mycart');
		$this->db->where($where);
	    $data = $this->db->get()->result();
	    $data2 = 0;
	    if ($data2 == 0){
	    	return $data2;
	    }else{
	    	$idCart = $data[0]->idCart;
	    	return $idCart;	
	    }
	}
}