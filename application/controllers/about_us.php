<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about_us extends CI_Controller {
  function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('v_aboutus');
	}

}
?>