<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Error extends MY_Frontend { 

	public function __construct() { 
		parent::__construct(); 
	}
	public function index()
	{
		$this->header();
		$this->load->view('error_view/error404');
		$this->footer();
	}
}

