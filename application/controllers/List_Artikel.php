<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Artikel extends CI_Controller {
	
	// Index login
	public function index() 
		{
		$data = array('title'	=> 'Halaman Dashboard');
		$this->load->view('list_artikel_view',$data);
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('list_artikel_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	
	// Fungsi lain
	
}
