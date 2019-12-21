<?php 

class M_product_detail extends CI_Model{	

	function add_to_cart($idBarang,$jumlah){	
		$data = array(
			'idBarang' => $idBarang,
			'jumlah' => $jumlah,
		);	
		$this->db->insert('detailmycart', $data);
	}

	function getData($id){
		$this->db->from('barang');
		$this->db->where('idBarang',$id);
	    return $this->db->get()->result();
	}	
}