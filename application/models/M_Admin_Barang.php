<?php 

class M_Admin_Barang extends CI_Model{

	function getAllData(){
		$this->db->from('barang');
	    return $this->db->get()->result();
	}

	function getData($id){
		$this->db->from('barang');
		$this->db->where('idBarang',$id);
	    return $this->db->get()->result();
	}	
	
	function insertBarang($data){
		$query = $this->db->insert('barang', $data);
	}
	function countBarangByKategori($kategori){
		$this->db->select('*');
		$this->db->where('kategori',$kategori);
		return $this->db->get('barang')->num_rows();
	}

	function editBarang($id,$data){
		$this->db->where('idBarang', $id);
		$this->db->update('barang', $data);
	 	$post = $this->input->post();
    }

	function hapusBarang($id){
		return $this->db->delete('barang',array("idBarang" => $id ));
	}
}