<?php 

class M_Admin_Pesanan extends CI_Model{

	function getAllData(){
		$this->db->from('pemesanan');
	    return $this->db->get()->result();
	}

	function getData($idTransaksi){
		$this->db->select('idTransaksi, tanggalPemesanan,tanggalPembayaran,statusPembayaran,detailmycart.idBarang,gambar1,namaBarang,harga,jumlah,totalBayar,username');
		$this->db->from('pemesanan');
		$this->db->join('mycart', 'pemesanan.idCart = mycart.idCart');
		$this->db->join('detailmycart', 'detailmycart.idCart = mycart.idCart');
		$this->db->join('barang', 'detailmycart.idBarang = barang.idBarang');
		$this->db->where('pemesanan.idTransaksi',$idTransaksi);
	    return $this->db->get()->result();
	}
	function ubahStatusPembayaran($id,$data){
		$this->db->where('idTransaksi',$id);
		$this->db->update('pemesanan',$data);
	}
}