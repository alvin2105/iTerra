<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Member extends CI_Controller {
	
	// Index login
	public function index() 
		{
		$data = array('title'	=> 'Halaman Dashboard');
		$this->load->view('dashboard_member_view',$data);
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_member_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	
	// Fungsi lain
	
}