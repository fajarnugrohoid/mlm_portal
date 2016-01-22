<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
	}
	public function index()
	{
		$this->load->view('frontend_view/layout/header');
		$this->load->view('frontend_view/home');
		$this->load->view('frontend_view/layout/footer');
	}
	public function test()
	{
		echo "string";
	}
}
