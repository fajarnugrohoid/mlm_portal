<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
	}
	public function index()
	{
		$this->header();
		$this->load->view('frontend_view/home');
		$this->footer();
	}
	public function login()
	{
		$this->header();
		$this->load->view("login/login");
		$this->footer();
		
	}
}
