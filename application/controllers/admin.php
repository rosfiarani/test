<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
  function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));		
		$this->load->model('M_login');
	}
 
	function index(){
		$this->load->view('v_admin-dashboard');
	}

	function inputBarang(){
		$this->load->view('v_admin-inputbarang');
	}


}
?>