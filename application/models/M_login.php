<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){
		$this->db->select('username');
		$this->db->select('password');
		$this->db->from('user');
		$this->db->where('username',$where['username']);
		$this->db->where('password',$where['password']);

		return $this->db->get();
	}	
}