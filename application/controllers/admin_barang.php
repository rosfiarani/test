<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_barang extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');		
		$this->load->model('M_Admin_Barang');
 
	}

	function index(){
		$info['productdata'] = $this->M_Admin_Barang->getAllData();
		$this->load->view('v_admin-listbarang',$info);
	}
	function lanjutInputBarang(){
		$this->load->view('v_admin-inputbarang');
	}

	function viewBarang(){
		$info['data'] = $this->M_Admin_Barang->getData($_GET['idBarang']);
		$this->load->view('v_admin-viewbarang',$info);
	}


	function lanjutEdit(){
		redirect('admin_barang');
	}

	function hapusBarang($id=null){
        if (!isset($id)) redirect('admin_barang');
        if ($this->M_Admin_Barang->hapusBarang($id)) {
        	$link="lanjutEdit";
			echo 'berhasil HAPUS BARANG. '.'<a href="'.$link.'">'.'klik disini</a> untuk halaman selanjutnya';
        }
	}

	function editBarangView(){
        $info['data'] = $this->M_Admin_Barang->getData($_GET['idBarang']);
       	$t = $_GET['idBarang'];
		var_dump($t);
       	$this->load->view('v_admin-editbarang',$info); 
	}

	function editBarang(){
		$this->form_validation->set_rules('Inputnama','Nama','required');
		echo 'edit Barang';
        if ($this->form_validation->run() == FALSE){
        	$ids= $this->input->post('Inputid', TRUE);
			redirect('admin_barang/editBarangView?idBarang='.$ids) ;
		}else{
			$id= $this->input->post('Inputid', TRUE);
			$data['namaBarang'] = $this->input->post('Inputnama', TRUE);
			$data['warna'] = $this->input->post('Inputwarna', TRUE);
			$data['stok'] = $this->input->post('Inputstok', TRUE);
			$data['bahan'] = $this->input->post('Inputbahan', TRUE);
			$data['harga'] = $this->input->post('Inputharga', TRUE);
			$this->M_Admin_Barang->editBarang($id,$data);
			$link="lanjutEdit";
			echo 'berhasil'.'<a href="'.$link.'">'.'klik disini</a> untuk halaman selanjutnya';
		}
	}
	function inputBarang(){
		$this->form_validation->set_rules('Inputnama','Nama','required');
        if ($this->form_validation->run() == FALSE){
        	$error = array('error' => 'data tidak lengkap');
			$this->load->view('v_admin-inputbarang',$error); 
		}else{
			$cekKategori = $this->input->post('Inputkategori');
			$count = $this->M_Admin_Barang->countBarangByKategori($cekKategori);
			//get the form values
			if ($cekKategori == "sneakers"){
				$id = '1000'.$count;
			}else if ($cekKategori == "flatshoes"){
				$id = '2000'.$count;
			}else if ($cekKategori == "heels"){
				$id = '3000'.$count;
			}else if ($cekKategori == "sandals"){
				$id = '4000'.$count;
			}
			$data['idBarang'] = $id;
			$data['namaBarang'] = $this->input->post('Inputnama', TRUE);
			$data['warna'] = $this->input->post('Inputwarna', TRUE);
			$data['deskripsi'] = $this->input->post('Inputdesc', TRUE);
			$data['stok'] = $this->input->post('Inputstok', TRUE);
			$data['berat'] = $this->input->post('Inputberat', TRUE);
			$data['bahan'] = $this->input->post('Inputbahan', TRUE);
			$data['kategori'] = $this->input->post('Inputkategori', TRUE);
			$data['harga'] = $this->input->post('Inputharga', TRUE);

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../assets/Product/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			for ($i=1;$i<4;$i++){
				$config['file_name'] = $id.'-'.$i;
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('InputFile'.$i)){
					
					$i=$i+10;
				}else{
					//file is uploaded successfully
					//now get the file uploaded data 
					$upload_data = $this->upload->data();
					//get the uploaded file name
					$data['gambar'.$i] = "assets/Product/".$upload_data['file_name'];
				}
			}
			if ($i>10){
				$error = array('error' => 'InputFile'.$i.$this->upload->display_errors());
				$this->load->view('v_admin-inputbarang', $error);
			}else {
				$this->M_Admin_Barang->insertBarang($data);
				$link="lanjutInputBarang";
				echo 'berhasil'.$link.'<a href="'.$link.'">'.'klik disini</a> untuk halaman selanjutnya';
			}
		}
	}
}
?>