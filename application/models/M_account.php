<?php 

class M_account extends CI_Model{	

    // public function upload($image){
    //     $config['upload_path'] = './images/';
    //     $config['allowed_types'] = 'jpg|png|jpeg';
    //     $config['max_size']  = '2048';
    //     $config['remove_space'] = TRUE;
      
    //     $this->load->library('upload', $config); // Load konfigurasi uploadnya
    //     if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
    //       // Jika berhasil :
    //       $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    //       return $return;
    //     }else{
    //       // Jika gagal :
    //       $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    //       return $return;
    //     }
    //   }
    public function getTransaksi($username){
        $this->db->select('idTransaksi,totalBayar');
        $this->db->from('mycart');
        $this->db->join('pemesanan', 'pemesanan.idCart = mycart.idCart');
        $this->db->where('pemesanan.statusPembayaran',0);
        $this->db->where('mycart.username',$username);
        return $this->db->get()->result();
    }
    public function addTransaksi($idCart,$totalharga){
        $ubah = array(
            'totalBayar' => $totalharga,
            'statusPembelian' => 1);
        $this->db->set($ubah);
        $this->db->where('idCart',$idCart);
        $this->db->update('mycart');
        $this->db->select('*');
        $count = $this->db->get('pemesanan')->num_rows();
        $idd = $count+1;
        $idTransaksi = "TP12648".$idd;
        $data = array(
            'idTransaksi' => $idTransaksi,
            'idCart' => $idCart,
            'statusPembayaran' => 0,
            'tanggalPemesanan' => date('Y-m-d')
        );
        $this->db->insert('pemesanan',$data);
    }

    public function getAccount($username){
        $this->db->from('pembeli');
        $this->db->where('username',$username);
	    return $this->db->get()->result();
    }

    function editPassword($data, $username){
        $this->db->set($data);
        $this->db->where('username',$username);
        $this->db->update('user');
        // $this->db->where('username',$username);
        // $this->db->update('pembeli',$data);
    }

    /*function addMyCart($idCart,$username,$totalharga){
        $data = array(
            'idCart' => $idCart,
            'username' => $username,
            'totalBayar' => $totalharga,
            'statusPembelian' => 0
        );
        $this->db->set($data);
        $this->db->where('idCart',$idCart);
        $this->db->update('mycart');
    }*/

    function getAllCartData(){
        $statusPembelian = 0;
        $this->db->from('mycart');
        $this->db->where('statusPembelian',$statusPembelian);
        return $this->db->get()->result();
    }

    function addPemesanan($idTransaksi,$tanggalPembayaran){
        $data = array(
            'tanggalPembayaran' => $tanggalPembayaran,
        );
        $this->db->set($data);
        $this->db->where('idTransaksi',$idTransaksi);
        $this->db->update('pemesanan');
    }

    function addNewCart($id){
        $this->db->select('*');
        $count = $this->db->get('mycart')->num_rows();
        $idCart = $count+1;
        $data = array(
            'idCart' => $idCart,
            'username' => $id,
            'totalBayar' => 0,
            'statusPembelian' => 0
        );
        $this->db->insert('mycart',$data);
    }
}