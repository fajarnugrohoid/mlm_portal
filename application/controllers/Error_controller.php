<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Error_controller extends CI_Controller { 

	public function __construct() { 
		parent::__construct(); 
	}
	public function index()
	{
		$this->load->view('frontend_view/layout/header');
		$this->load->view('error_view/error404');
		$this->load->view('frontend_view/layout/footer');
	}
}

